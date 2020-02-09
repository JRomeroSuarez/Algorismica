# -*- coding: utf-8 -*-
"""
Created on Sun Nov  5 20:09:34 2017

@author: jordi
"""
def getBinari(N):
    binari = ''
    while N/2 != 0:
        binari = str(N % 2) + binari
        N // 2
    binari = str(N) + binari
    while len(binari) < 16:
        binari = " " + binari
    return binari