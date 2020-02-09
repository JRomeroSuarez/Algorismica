{
 "cells": [
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "# Sessió 1: Python I\n",
    "\n",
    "Indicacions:\n",
    "+ Cada exercici s'ha de poder respondre executant una única funció (tot i que aquesta funció pot cridar altres funcions si és necessari)."
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "## Numeros binaris fins a N\n",
    "\n",
    "Donat un número N, creat tots els nombres binaris entre 1 i  N, ambdós inclosos. \n",
    "\n",
    "Pots fer servir la funció bin. La funció bin(x) transforma x en la seva forma binària. Observa els següents exemples."
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 4,
   "metadata": {},
   "outputs": [
    {
     "name": "stdout",
     "output_type": "stream",
     "text": [
      "5 0b101\n",
      "0b1000\n"
     ]
    }
   ],
   "source": [
    "a = 5\n",
    "ab = bin(a)\n",
    "print (a, ab)\n",
    "print(bin(5+3))"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "**Pregunta 1**: Quina solució hauria de donar per als següents valors: \n",
    "        \n",
    "- N = 5\n",
    "- N = 10"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "Hauria de donar respectivament:\n",
    "- 0b1, 0b10, 0b11, 0b100, 0b101\n",
    "- 0b1, 0b10, 0b11, 0b100, 0b101, 0b110, 0b111, 0b1000, 0b1001, 0b1010"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 1,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "\"\"\"\n",
    "Aquesta funció genera els nombres binaris\n",
    "entre 1 i N\n",
    ":param N el valor més gran pels binaris\n",
    ":return mostra per pantalla els nombres binari\n",
    "\"\"\"\n",
    "\n",
    "\n",
    "def generaBinari(N):\n",
    "    for i in range (1,N+1):\n",
    "        print(bin(i))   "
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 2,
   "metadata": {},
   "outputs": [
    {
     "name": "stdout",
     "output_type": "stream",
     "text": [
      "0b1\n",
      "0b10\n",
      "0b11\n",
      "0b100\n",
      "0b101\n"
     ]
    }
   ],
   "source": [
    "generaBinari(5)"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 3,
   "metadata": {},
   "outputs": [
    {
     "name": "stdout",
     "output_type": "stream",
     "text": [
      "0b1\n",
      "0b10\n",
      "0b11\n",
      "0b100\n",
      "0b101\n",
      "0b110\n",
      "0b111\n",
      "0b1000\n",
      "0b1001\n",
      "0b1010\n"
     ]
    }
   ],
   "source": [
    "generaBinari(10)"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {
    "collapsed": true
   },
   "source": [
    "**Pregunta 2**: Per a N = 3 quantes operacions es fan? indica les operacions que es fan a cada línia, i quantes vegades es repeteix aquella línia."
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "1 assignació i=1\n",
    "1 comparació: 1<3+1\n",
    "1 print\n",
    "\n",
    "1 assignació i=2\n",
    "1 comparació 1<3+1\n",
    "1 print\n",
    "\n",
    "1 assignació i=3\n",
    "1 comparació 1<3+1\n",
    "1 print\n",
    "\n",
    "1 assignació i=4\n",
    "1 comparació 1<3+1\n",
    "\n",
    "Es fan 11 operacions"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "## El 8 és primer o és darrer?\n",
    "\n",
    "Donada una llista retornar True si el nombre 8 és el primer element de la llista o és el darrer. Retornar fals altrament."
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "**Pregunta 1**: Posa 4 exemples de llistes, dues que retornin True i dues que retornin False."
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "Els quatre exemples serien:\n",
    "\n",
    "- [8, 1, 0] True\n",
    "- ['gat', 0b101, 8] True\n",
    "- [5, -7, 2] False\n",
    "- [4, 8, 3] False"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 4,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "\"\"\"\n",
    "Aquesta funció, donada una llista d’enters,\n",
    "retorna True si 8 és el primer o el darrer element de la llista, \n",
    "retorna False altrament\n",
    ":param llista una llista d'enters\n",
    ":return: True si 8 és a l'inici o final, False altrament\n",
    "\"\"\"\n",
    "\n",
    "\n",
    "def primerDarrer8(llista):\n",
    "    if llista[0]==8 or llista[-1]==8:\n",
    "        return True\n",
    "    else:\n",
    "        return False"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 8,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "True"
      ]
     },
     "execution_count": 8,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "# Test de la funció\n",
    "primerDarrer8(['gat', 0b101, 8])\n",
    "\n",
    "# Hauria de retornar: True"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "## A mig camí\n",
    "\n",
    "Donades dues llistes d'enters, cadascuna de longitud 3, retorna una nova llista que contingui l'element del mig.\n",
    "\n",
    "Per exemple:\n",
    "- [4, 5, 6], [7, 8, 9] => [5, 8]\n",
    "- [6, 6, 6], [1, 2, 3] => [6, 2]"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "**Pregunta 1**: Inventa't 3 parelles de llistes que retornin:\n",
    "    \n",
    "- [3, 3]\n",
    "- [-1, 2]\n",
    "- [0, 123]"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "Parelles inventades\n",
    "\n",
    "- [4,3,5],[7,3,9]\n",
    "- [5,-1,6],[8,2,10]\n",
    "- [0,0,0],[124,123,122]"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 22,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "\"\"\"\n",
    "Aquesta funció, donades dues llistes d'enters,\n",
    "retorna una nova llista formada pels seus dos elements del mig\n",
    ":param llista1 una llista d'enters\n",
    ":param llista2 una llista d'enters\n",
    ":return: una llista formada pels dos elements del mig de llista1 i llista2\n",
    "\"\"\"\n",
    "\n",
    "\n",
    "def aMigCami(llista1,llista2):\n",
    "    llista=[]\n",
    "    llista.append(llista1[1])\n",
    "    llista.append(llista2[1])\n",
    "    return llista\n",
    "\n",
    "def aMigCami2(llista1,llista2):\n",
    "    llista=llista1[1:2]+llista2[1:2]\n",
    "    return llista"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 24,
   "metadata": {},
   "outputs": [
    {
     "name": "stdout",
     "output_type": "stream",
     "text": [
      "[11, 5]\n",
      "[11, 5]\n"
     ]
    }
   ],
   "source": [
    "# Test de la funció\n",
    "print(aMigCami([10,11,12],[6,5,4]))\n",
    "\n",
    "print(aMigCami2([10,11,12],[6,5,4]))\n",
    "# Hauria de retornar: [11,5]"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "## Prou cerveses?\n",
    "\n",
    "Quan els estudiants monten una festa els agrada tenir cerveses. Per a què una festa tingui èxit cal que hi hagi entre 50 i 100 cerveses, excepte en el cap de setmana en el que no hi ha un límit superior en el nombre de cerveses.\n",
    "\n",
    "Escriu una funció '''prouCerveses''' en la que donat un nombre de cerveses i un booleà indicant si és cap de setmana o no, retorni si la festa serà un èxit."
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "**Pregunta 1**: Proposa uns valors donats a la funció prouCerveses que provoquin un èxit de festa entre setmana i un èxit de festa el cap de setmana."
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "Valors per a una festa exitosa\n",
    "- prouCerveses(77,False)\n",
    "- prouCerveses(110,True)\n"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 27,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "\"\"\"\n",
    "Aquesta funció, donada una quantitat de cerveses,\n",
    "i un booleà que indica que és cap de setmana (True = cap de setmana)\n",
    "retorna si la festa serà un èxit.\n",
    "La festa serà un èxit si entre setmana hi ha entre 50 i 100 cerveses, \n",
    "o si el cap de setmana hi ha més de 50 cerveses.\n",
    ":param numCerveses enter que indica el nombre de cerveses\n",
    ":param esCapDeSetmana booleà que indica si és cap de setmana\n",
    ":return: True si el nombre de cerveses està en els límits indicats\n",
    "         False altrament\n",
    "\"\"\"\n",
    "\n",
    "\n",
    "def prouCerveses(numCerveses,esCapDeSetmana):\n",
    "    if numCerveses<50:\n",
    "        return False\n",
    "    elif numCerveses<100:\n",
    "        return True\n",
    "    else:\n",
    "        return esCapDeSetmana\n",
    "        "
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 32,
   "metadata": {},
   "outputs": [
    {
     "data": {
      "text/plain": [
       "True"
      ]
     },
     "execution_count": 32,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "# Test de la funció\n",
    "prouCerveses(110,True)\n",
    "\n",
    "# Hauria de retornar: True"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "## Sumatori de parelles\n",
    "\n",
    "Donada una llista d’enters i  un valor de suma, trobar totes les parelles de nombres a la llista que sumin aquest valor.\n",
    "\n",
    "Per exemple:\n",
    "- Llista=[3, 1, 5, 2, 7, 8], Suma=10</li>\n",
    "- Solució:\n",
    "   - Parella trobada als índexs 0 i 4,  (3 + 7)</li>\n",
    "   - Parella trobada als índexs 3 i 5 (2+8)</li>\n"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "**Pregunta 1**: Quina solució hauria de donar per als següents valors: \n",
    "\n",
    "- Llista:[5, 5, 1, 3, 5], Suma:10\n",
    "- Llista:[4, 6, 1, 3, 9, 4], Suma:12\n",
    "- Llista3:[4, 7], Suma:[9]"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 43,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "\"\"\"\n",
    "Aquesta funció, donada una llista d’enters i  un valor de suma,\n",
    "troba una parella de nombres a la llista que sumin aquest valor.\n",
    ":param llista una llista d'enters\n",
    ":param valorSuma un enter amb el valor de la suma\n",
    ":return: No retorna res, mostra per pantalla el resultat\n",
    "\"\"\"\n",
    "\n",
    "\n",
    "def parellesSuma(llista, valorSuma):\n",
    "    for i in range(0,len(llista)-1):  # atenció a aquest -1\n",
    "        for j in range(i+1,len(llista)):  # atenció a i+1\n",
    "            if llista[i]+llista[j]==10:\n",
    "                print(\"Parella trobada als índexs\",i,\",\",j,\"(\",llista[i],\"+\",llista[j],\")\")"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 44,
   "metadata": {},
   "outputs": [
    {
     "name": "stdout",
     "output_type": "stream",
     "text": [
      "Parella trobada als índexs 0 , 4 ( 3 + 7 )\n",
      "Parella trobada als índexs 3 , 5 ( 2 + 8 )\n"
     ]
    }
   ],
   "source": [
    "# Test de la funció\n",
    "parellesSuma([3, 1, 5, 2, 7, 8], 10)\n",
    "\n",
    "# Hauria de retornar: Parella trobada als indexs 0, 4 (3 + 7) i als índex 3 i 5 (2 + 8)"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "**Pregunta 2**: Si la llista té 5 posicions, quantes comparacions es fan?"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "Per l'índex 0: 4 comparacions\n",
    "Per l'índex 1: 3 comparacions\n",
    "Per l'índex 2: 2 comparacions\n",
    "Per l'índex 3: 1 comparació"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "## Divisors\n",
    "\n",
    "Escriu una funció '''divisors''' que demani un nombre a l'usuari menor que 30 i mostri una llista amb tots els seus divisors.\n",
    "\n",
    "Exemple:\n",
    "- Digues-me un nombre? 8  => [1,2,4,8]\n",
    "- Digues-me un nombre? 5  => [1,5]\n"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 1,
   "metadata": {
    "collapsed": true
   },
   "outputs": [],
   "source": [
    "\"\"\"\n",
    "Aquesta funció, pregunta a l'usuari un nombre menor que 30 i retorna\n",
    "la llista amb els seus divisors\n",
    ":return: llista amb els divisors del nombre introduït per l'usuari\n",
    "\"\"\"\n",
    "\n",
    "\n",
    "def divisors():\n",
    "    aint=40\n",
    "    while aint>30:\n",
    "        a = input(\"Digues-me un nombre menor que 30?\")\n",
    "        aint=int(a)\n",
    "    llista=[]\n",
    "    for i in range(1,aint):\n",
    "        if aint%i==0:\n",
    "            llista.append(i)\n",
    "    return llista"
   ]
  },
  {
   "cell_type": "code",
   "execution_count": 2,
   "metadata": {},
   "outputs": [
    {
     "name": "stdout",
     "output_type": "stream",
     "text": [
      "Digues-me un nombre menor que 30?70\n",
      "Digues-me un nombre menor que 30?28\n"
     ]
    },
    {
     "data": {
      "text/plain": [
       "[1, 2, 4, 7, 14]"
      ]
     },
     "execution_count": 2,
     "metadata": {},
     "output_type": "execute_result"
    }
   ],
   "source": [
    "# Test de la funció\n",
    "divisors()\n",
    "\n",
    "# Digues-me un nombre? 28\n",
    "# Hauria de retornar: [1, 2, 4, 7, 14]"
   ]
  },
  {
   "cell_type": "markdown",
   "metadata": {},
   "source": [
    "<p style=\"text-align:right;font-size:0.9em\">\n",
    "&copy;Jordi Vitrià i Mireia Ribera\n",
    "</p>"
   ]
  }
 ],
 "metadata": {
  "kernelspec": {
   "display_name": "Python 3",
   "language": "python",
   "name": "python3"
  },
  "language_info": {
   "codemirror_mode": {
    "name": "ipython",
    "version": 3
   },
   "file_extension": ".py",
   "mimetype": "text/x-python",
   "name": "python",
   "nbconvert_exporter": "python",
   "pygments_lexer": "ipython3",
   "version": "3.6.2"
  }
 },
 "nbformat": 4,
 "nbformat_minor": 2
}
