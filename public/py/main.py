from typing import Union
from unicodedata import category

from fastapi import FastAPI
from pydantic import BaseModel
from fastapi.middleware.cors import CORSMiddleware

import pandas as pd
import numpy as np

from pyanp import priority
from pyanp import rowsens
from topsis import topsis

import mysql.connector

#Establishing connection
conn = mysql.connector.connect(user='root',
                               host='127.0.0.1',
                               port='3306',
                               password ='',
                               database ='Database_Properti')

# the cursor() method
mycursor = conn.cursor()
  
class Item(BaseModel):
    area: str
    category : int
    hmin : int
    hmax : int
    ltmin : int
    ltmax : int
    lbmin : int
    lbmax : int 
    jkmrtidur : int 
    jkmrmandi : int

    """ description: Union[str, None] = None
    price: float
    tax: Union[float, None] = None """

app = FastAPI()

origins = [
    "http://rumahjakarta.test",
    "https://rumahjakarta.test",
    "http://localhost",
    "http://localhost:8080",
]

app.add_middleware(
    CORSMiddleware,
    allow_origins=origins,
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)

@app.post("/items")
 
async def create_item(item: Item): 

    """ print(item) """

    # SQL Query
    sql = "SELECT * FROM posts WHERE harga <=" + str(item.hmax) + " AND harga >= " + str(item.hmin) + " AND area LIKE '%" + item.area  + "%' AND category_id LIKE '%" + str(item.category) +  "%' AND luastanah >= " + str(item.ltmin) + " AND luastanah <= " + str(item.ltmax) + " AND luasbangunan >= " + str(item.lbmin) + " AND luasbangunan <= " + str(item.lbmax) + " AND jktidur >= " + str(item.jkmrtidur) + " AND jkmandi >= " + str(item.jkmrmandi) + ";" 

    """ print(sql) >>>> di laravel kan ada request('id')... di python ada class.variable """
    # Executing query
    
    mycursor.execute(sql)
    
    myresult = mycursor.fetchall()

    a = []

    """ print(len(myresult)) """

    for record in myresult:
        a.append([record[9],record[10],record[11],record[12],(record[6]/100000000)])

    mat3 = priority.get_matrix("./public/py/pairwise5x5.csv")
    """ mat3 = np.array(a) """
    #weightpriority
    wp = priority.pri_eigen(mat3)
    priority.incon_std(mat3)
    mat42 = rowsens.get_matrix("./public/py/supermatrix4x4.csv")
    rowsens.row_adjust_priority(mat=mat42, row=0, p=0.1, p0mode=0.5)
    
    I = [1, 1, 1, 1, 1]

    decision = topsis(a, wp, I)
    print(decision)

    """ print(myresult[decision.optimum_choice]) """
    return(myresult[decision.optimum_choice])

    """ for x in myresult:
        print(x) """

    """ a = {[],
        []} """
    
    """ rekter = rekomendasi()

    return {
        "index_rekomendasi": rekter
    } """

""" # Closing the connection
conn.close()

def rekomendasi():
    mat3 = priority.get_matrix("public\py\pairwise4x4.csv")
    wp = priority.pri_eigen(mat3)
    priority.incon_std(mat3)
    mat42 = rowsens.get_matrix("public\py\supermatrix4x4.csv")
    rowsens.row_adjust_priority(mat=mat42, row=0, p=0.1, p0mode=0.5)

    a = [[7, 9, 8, 9], 
        [7, 9, 9, 8], 
        [9, 8, 7, 8], 
        [8, 9, 8, 7]]
    I = [1, 1, 1, 1]

    decision = topsis(a, wp, I)
    print(decision) """

""" py -m uvicorn public.py.main:app --reload """