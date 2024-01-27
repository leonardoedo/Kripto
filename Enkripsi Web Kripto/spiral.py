import string
import math
import numpy as np
import random
import sys

spasi = "_"
akhirSpiral = "@"

def spiral_encrypt(plain_text): 

    plain_text = plain_text.replace(" ", spasi)
    square_root = math.sqrt(len(plain_text))

    rounded_step_size = math.ceil(square_root)

    step_size = rounded_step_size 

    matrix_representation = (
        []
    )  
    encrypted_text = "" 

    for i in range(step_size):  
        matrix_row = [] 
        for j in range(step_size):
            index = (
                j * step_size
                + i 
            ) 
            if index < len(
                plain_text
            ): 
                matrix_row.append(
                    plain_text[index]
                ) 
            else: 
                matrix_row.append(akhirSpiral) 
        matrix_representation.append(
            matrix_row
        )  


    # proses enkripsi
    matrix_height = step_size  
    matrix_width = step_size 
    mid = step_size // 2 
    x1=0 

    for i in range(mid):
        if step_size % 2 == 0: 
            for x in range(mid + i , mid - i -1 , -1):
                encrypted_text += matrix_representation[x][mid+i] 
                x1+=1
            for y in range(mid + i , mid - i -1, -1 ): 
                encrypted_text += matrix_representation[mid-i-1][y] 
                x1+=1
            for x in range(mid - i - 1, mid + i + 1): 
                encrypted_text += matrix_representation[x][mid-i-1]
                x1+=1
            if(i+1!=mid): 
                for y in range(mid - i -1, mid + i + 1, +1): 
                    encrypted_text += matrix_representation[mid+i+1][y] 
                    x1+=1
        else:
            for x in range(mid - i, mid + i + 1): 
                encrypted_text += matrix_representation[x][mid-i] 
                x1+=1
            for y in range(mid - i , mid + i + 1, +1): 
                encrypted_text += matrix_representation[mid+i+1][y]
                x1+=1
            for x in range(mid + i + 1, mid - i -1, -1):  
                encrypted_text += matrix_representation[x][mid+i+1]
                x1+=1
            for y in range(mid + i +1, mid - i -1, -1 ):  
                encrypted_text += matrix_representation[mid-i-1][y]
                x1+=1
            if(i+1==mid):
                i+=1
                for x in range(mid - i , mid + i + 1):
                  encrypted_text += matrix_representation[x][mid-i]
                  x1+=1

    return encrypted_text

if __name__ == "__main__":
    if len(sys.argv) != 2:
        print("Usage: spiral.py <password>")
    else:
        password = sys.argv[1]
        result = spiral_encrypt(password)
        print(result)