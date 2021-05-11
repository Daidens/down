# -*- coding: utf-8 -*-
"""
Created on 2021-05-06 20:49:19
---------
@summary:
---------
@author: u0_a468
"""

import feapder
from feapder.db.mysqldb import MysqlDB
import re

class Tophubspider(feapder.AirSpider):


    def start_requests(self):
        yield feapder.Request("https://tophub.toady", download_midware=self.download_midware)

    def parse(self, request, response):
        card_elements = response.xpath('//div[@class='cc-cd']')
        buy_good_element = [card_element for card_element in card_elements if 
        card_element.xpath('.//div[@class="cc-cd-is"]//span/text()').extract_first()='什么值得买'][0]
        
        a_elements = buy_good_element.xpath('.//div[@class="cc-cd-cb nano"]//a')
        
        for a_element in a_elements:
            title = a_element.xpath('.//span[@class="t"]/text()').extract_first()
            
            href = a_element.xpath('./@href').extract_first()
            
            yield feapder.Request(href, download_midware=self.download_midware, callback=self.parse_detail_page, title = title)
            
        
        
        
    def download_midware(self, request):
        ua = UserAgent().random
        request.headers = {'User-Agent':ua}
        return request
        
    def __init__(self, *args, **kwargs):
        super().__init__(*args, **kwargs)
        self.db = MysqlDB()
        
    def parse_detail_page(self, request, response):
    
        title=request.title
        url = request.url
        
        author = response.xpath('//a[@class="author-title"]/text(()').extract_first().strip()
        
        print("作者：", author, "文章标题：", title, "地址：", url)
        
        desc_elements = response.xpath('//span[@class="xilie"]/span')
        
        print("desc数目：", len(desc_elements))
        
        like_count = int(re.findall('\d+', desc_elements[1].xpath('./text()').extract_first())[0])
        collection_count = int(re.findall('\d+', desc_elements[2].xpath('./text()').extract_first())[0])comment_count = int(re.findall('\d+', desc_elements[3].xpath('./text()').extract_first())[0])
        
        print("点赞：", like_count, "收藏：", collection_count, "评论：", comment_count)
        
        sql = "INSERT INTO topic(title.auth, like_count, collection, comment) values ('%s','%s','%s','%s')"%(title, author,like_count, collection_count,comment_count)
        
        self.db.execute(sql)
    

if __name__ == "__main__":
    Tophubspider().start()