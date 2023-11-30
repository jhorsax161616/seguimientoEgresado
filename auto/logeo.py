import selenium
import os
import time
from selenium import webdriver
from selenium.webdriver.common.by import By

url = 'http://localhost/seguimientoEgresado/public/login'
driver = webdriver.Chrome()

driver.maximize_window()
driver.get(url)


# Enviar email
email = driver.find_element(By.ID, 'email')
email.send_keys('55555555@continental.edu.pe')
time.sleep(2)
# Enviar Contraseña
password = driver.find_element(By.ID, 'password')
password.send_keys('55555555')
time.sleep(2)
# Click en el boton acceder
acceder = driver.find_element(By.ID, 'acceder')
acceder.click()

time.sleep(5)