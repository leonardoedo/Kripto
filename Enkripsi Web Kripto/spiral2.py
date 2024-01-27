import string
import math
import numpy as np
import random
import sys

spasi = "_"
akhirSpiral = "@"

def spiral_decrypt(cipher_text):  
    square_root = math.sqrt(len(cipher_text))

    rounded_step_size = math.ceil(square_root)
    step_size = rounded_step_size 

    matrix_height = step_size  
    matrix_width = step_size 
    mid = step_size // 2
    x1=0 
    plain_text_matrix = (
        [  
            [" " for _ in range(matrix_width)] for _ in range(matrix_height)
        ]
    )

    idx = 0  

    for i in range(mid):  
        if matrix_height % 2 == 0:  
            for x in range(mid + i , mid - i -1 , -1): 
                plain_text_matrix[x][mid+i] = cipher_text[ 
                        idx
                    ] 
                idx += 1  
                x1+=1
            for y in range(mid + i , mid - i -1, -1 ): 
                plain_text_matrix[mid-i-1][y] = cipher_text[ 
                        idx
                    ] 
                idx += 1 
                x1+=1
            for x in range(mid - i - 1, mid + i + 1): 
                plain_text_matrix[x][mid-i-1] = cipher_text[ 
                        idx
                    ] 
                idx += 1 
                x1+=1
            if(i+1!=mid): 
                for y in range(mid - i -1, mid + i + 1, +1): 
                    plain_text_matrix[mid+i+1][y] = cipher_text[ #
                        idx
                    ]  
                    idx += 1  
                    x1+=1
        else:
            for x in range(mid - i, mid + i + 1): 
                plain_text_matrix[x][mid-i] = cipher_text[ 
                        idx
                    ]  
                idx += 1 
                x1+=1
            for y in range(mid - i , mid + i + 1, +1): 
                plain_text_matrix[mid+i+1][y] = cipher_text[ 
                        idx
                    ]  
                idx += 1 
                x1+=1
            for x in range(mid + i + 1, mid - i -1, -1): 
                plain_text_matrix[x][mid+i+1] = cipher_text[ 
                        idx
                    ]  
                idx += 1 
                x1+=1
            for y in range(mid + i +1, mid - i -1, -1 ): 
                plain_text_matrix[mid-i-1][y] = cipher_text[ 
                        idx
                    ] 
                idx += 1 
                x1+=1
            if(i+1==mid): 
                i+=1
                for x in range(mid - i , mid + i + 1): 
                  plain_text_matrix[x][mid-i] = cipher_text[ 
                        idx
                    ]  
                  idx += 1
                  x1+=1

    plain_text = "" 
    for j in range(matrix_width):  
        for i in range(matrix_height): 
            if plain_text_matrix[i][j] != akhirSpiral: 
                plain_text += plain_text_matrix[i][
                    j
                ] 
    print(plain_text)
    return plain_text.replace(spasi, ' ')

if __name__ == "__main__":
    if len(sys.argv) != 2:
        print("Usage: spiral.py <password>")
    else:
        password = sys.argv[1]
        result = spiral_decrypt(password)
        print(result)