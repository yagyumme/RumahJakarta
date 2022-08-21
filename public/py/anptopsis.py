import pandas as pd
import numpy as np

from pyanp import priority
from pyanp import rowsens
from topsis import topsis

mat3 = priority.get_matrix("./public/py/pairwise5x5.csv")
wp = priority.pri_eigen(mat3)
#priority.incon_std(mat3)
#mat42 = rowsens.get_matrix("public\py\supermatrix4x4.csv")
#arraySensitivity = rowsens.row_adjust_priority(mat=mat42, row=0, p=0.1, p0mode=0.5)

a = [[7, 9, 8, 9], 
     [7, 9, 9, 8], 
     [9, 8, 7, 8], 
     [8, 9, 8, 7]]
I = [1, 1, 1, 1]

print(wp)