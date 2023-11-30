import selenium
import os
import time
from selenium import webdriver
from selenium.webdriver.common.by import By

url = 'http://localhost/seguimientoEgresado/public/login'
driver = webdriver.Chrome()

driver.maximize_window()
driver.get(url)

# Redireccionar a crear nueva cuenta
new_account = driver.find_element(By.ID, 'new_account')
new_account.click()

time.sleep(2)

# Enviar nombre
name = driver.find_element(By.ID, 'name')
name.send_keys('Jhim Ingaroca Maldonado')
time.sleep(2)
# Enviar email
email = driver.find_element(By.ID, 'email')
email.send_keys('55555555@continental.edu.pe')
time.sleep(2)
# Enviar Contraseña
password = driver.find_element(By.ID, 'password')
password.send_keys('55555555')
time.sleep(2)
# Enviar confirmacion de Contraseña
password_confir = driver.find_element(By.ID, 'password_confir')
password_confir.send_keys('55555555')
time.sleep(1)
# Click en el boton acceder
registrate = driver.find_element(By.ID, 'registrate')
registrate.click()

time.sleep(5)