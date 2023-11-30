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

# Enviar Contraseña
password = driver.find_element(By.ID, 'password')
password.send_keys('55555555')

# Click en el boton acceder
acceder = driver.find_element(By.ID, 'acceder')
acceder.click()

# Macroprocesos
driver.find_element(By.ID, 'macroprocesos').click()
time.sleep(2)
# Misionales
driver.find_element(By.ID, 'misionales').click()
time.sleep(2)
# Gestion de Egresados
driver.find_element(By.ID, 'gestionEgresados').click()
time.sleep(2)

# Click en el boton Gestionar Egresados
gestionarE = driver.find_element(By.ID, 'gestionar_egresados')
gestionarE.click()
time.sleep(1)
# Click en el boton de Nuevo Egresado
nuevoEgresado = driver.find_element(By.ID, 'nuevo_egresado')
nuevoEgresado.click()
time.sleep(1)
# Enviar nombre
nombre = driver.find_element(By.ID, 'nombre')
nombre.send_keys('Maglioni Arana Caparachin')
time.sleep(1)
# Enviar grado de Instrucción
grado_instruccion = driver.find_element(By.ID, 'grado_instruccion')
grado_instruccion.send_keys('Doctor')
time.sleep(1)
# Enviar especializacion
especializacion = driver.find_element(By.ID, 'especializacion')
especializacion.send_keys('Calidad de Software')
time.sleep(1)
# Enviar fecha egreso
fecha_egreso = driver.find_element(By.ID, 'fecha_egreso')
fecha_egreso.send_keys('08122000')
time.sleep(1)
# Enviar fecha titulo
fecha_titulo = driver.find_element(By.ID, 'fecha_titulo')
fecha_titulo.send_keys('20012001')
time.sleep(1)
# Enviar fecha maestria
fecha_maestria = driver.find_element(By.ID, 'fecha_maestria')
fecha_maestria.send_keys('15122005')
time.sleep(1)
# Enviar fecha doctorado
fecha_doctorado = driver.find_element(By.ID, 'fecha_doctorado')
fecha_doctorado.send_keys('10112008')
time.sleep(1)
# Enviar cargo empresa
cargo_empresa = driver.find_element(By.ID, 'cargo_empresa')
cargo_empresa.send_keys('Director de Escuela')
time.sleep(1)
# Enviar tiempo laborar
tiempo_laboral = driver.find_element(By.ID, 'tiempo_laboral')
tiempo_laboral.send_keys('15 años')
time.sleep(1)
# Enviar id Empresa
id_empresa = driver.find_element(By.ID, 'id_empresa')
id_empresa.send_keys('1')
time.sleep(1)
# Click en el boton guardar
guardar = driver.find_element(By.ID, 'guardar')
guardar.click()

time.sleep(5)