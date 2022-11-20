import time
from datetime import datetime
from selenium import webdriver
from selenium.webdriver.common.by import By
import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="Az151088*",
  database="laravel"
)

mycursor = mydb.cursor()


driver = webdriver.Chrome()
driver.get('https://taurusarmas.com.br/pt/produtos/armas-longas')

time.sleep(10)

elementosTitulo = driver.find_elements(By.CLASS_NAME, "product-box__title")
nome = []

for i in range(10):
    nome.append(elementosTitulo[i].text)

for i in range(10):
    created = datetime.now()
    print(created)
    updated = datetime.now()
    sql = "INSERT INTO tipo_armas (nome, created_at, updated_at) VALUES (%s,%s,%s)"
    val = (nome[i], created, updated)
    mycursor.execute(sql, val)
    mydb.commit()
    print(mycursor.rowcount, "record inserted.")