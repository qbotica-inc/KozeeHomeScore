#!C:/Users/pvmad/AppData/Local/Programs/Python/Python37-32/python.exe
print "Content-type: text/html\n\n";
import selenium
from selenium import webdriver
from bs4 import BeautifulSoup
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.chrome.options import Options  
import requests
import lxml.html as lh
import pandas as pd
import csv
import sys
from selenium import webdriver
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.by import By
from selenium.common.exceptions import TimeoutException
import time
# Using Chrome to access web
# Open the website
#data = pd.read_csv("maricopa.csv")
chrome_options = Options()  
chrome_options.add_argument("--headless")
driver = webdriver.Chrome("C:/Users/pvmad/AppData/Local/Programs/Python/Python37-32/Scripts/chromedriver.exe", chrome_options = chrome_options)
#with open('output_rf_1.csv', mode='w') as op:
    #employee_writer = csv.writer(op, delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)
    #employee_writer.writerow(['Street Address','Coffee Shops','Restaurant Shops','Walk Score','Transit Score','Bike Score','Heating Type','Physical Condition','Building Construction Quality','Exterior Wall','Building Type','Parking Type','No of parking spaces'])             
    #for x in range(1000):
address = "11307-E-ROSELLE-CIR"
address = address.replace("-"," ")
count = 0
#for x in range(100):
driver.get('https://www.redfin.com')
time.sleep(5)
ele = driver.find_element_by_id("search-box-input")
#print(ele.get_attribute("textContent"))
#selectLinkOpeninNewTab = Keys.chord(Keys.CONTROL,Keys.RETURN); 
#driver.findElement(By.ID("search-box-input")).sendKeys(Keys.CONTROL + Keys.ENTER);
#print(ele)
ele.send_keys(address)
ele.send_keys(Keys.CONTROL + Keys.ENTER)
#wait = WebDriverWait(driver, 10)
#wait(driver, 10).until(EC.element_to_be_clickable((By.ID, search-box-input))).click()
#ele.send_keys(data['Street Address'][x])
#driver.execute_script("arguments[0].setAttribute('value',arguments[1])",ele,"1812 E Keim Dr")
#temp = driver.find_element_by_xpath("//button[@class='inline-block SearchButton clickable float-right']")
#driver.execute_script("arguments[0].removeAttribute('disabled')",temp)
#temp.send_keys(Keys.NULL)
#ele.click()
#ele.send_keys(Keys.HOME)   
#driver.find_element_by_css_selector('.inline-block.SearchButton.clickable.float-right').click()
#ele.send_keys(Keys.ENTER)
#driver.find_element_by_xpath("//button[@class='inline-block SearchButton clickable float-right']").click()
#delay = 50
#myElem = WebDriverWait(driver, delay).until(EC.presence_of_element_located((By.CLASS_NAME, 'clear-fix descriptive-paragraph')))
init = []
try:
    time.sleep(5)
    driver.execute_script("window.scrollTo(0, 10000)") 
    price = driver.find_element_by_css_selector('.clear-fix.descriptive-paragraph')
    #price_content = price.get_attribute('children')[0].get_attribute("children")
    #employee_writer.writerow([price.get_attribute("textContent")])
    init.append("Street:"+address)
    result_c_r = price.get_attribute("textContent").split(".")
    for r in result_c_r:
        print(r + "\r\n")
        if("coffee shops" in r):
            #print(len(r.split(",")))
            init.append("Coffee Shops:"+ str(len(r.split(","))))
            #print("Added")
        elif("restaurants" in r):
            init.append("Restaurants:"+ str(len(r.split(","))))
            #init.append(len(r.split(",")))
            #print("Added")
        else:
            print("Nothing")
    newp = driver.find_element_by_xpath("//div[@class='viz-container']")
    result = newp.get_attribute("textContent").split("/")
    count = 0
    #init = []
    for r in result:
        print(r)
        count = count + 1
        if(count == 1):
            init.append("Walk Score:" + r.strip()[-2:])
        elif(count == 2):
            init.append("Transit Score:" + r.strip()[-2:])
        elif(count ==3):
            init.append("Bike Score:" + r.strip()[-2:])
    newp2 = driver.find_elements_by_class_name("super-group-content")
    for n in newp2: 
        temp = n.get_attribute("outerText").split("\n")
        for t in temp: 
            print(t)
            if(":" in t and ("Heating Type" in t or "Phyiscal" in t or "Construction Quality" in t or "Exterior Wall" in t or "Building Type" in t or "Parking Type" in t or "Parking Spaces" in t)):
                init.append(t.split(":")[0] +":"+ t.split(":")[1])
    print(init)
    employee_writer.writerow(init)
    print("Added entry")
except:
    print("error")
with open('listfile.txt', 'w') as filehandle:  
    for listitem in init:
        filehandle.write('%s\n' % listitem)
driver.quit();
'''data_temp = price_content.strip().split("\n")
init = []
init.append(data['Street Address'][x])
for d in data_temp: 
    init.append(d.split("\t")[1])
employee_writer.writerow(init)'''
