
# Complexitat dels algorismes i treball amb fitxers

En aquesta sessió es reforcen els conceptes bàsics per calcular la complexitat d'un algorisme. També es veuen les funcions de Python relacionades amb la lectura i escriptura de fitxers.

# Complexitat


## Càlcul

Estimem la complexitat d'un algorisme comptant el nombre de funcions elementals que fa l'algorisme. Usualment calcularem el temps del pitjor cas, i usarem la notació gran O.

Anem a veure uns casos simples de càlcul de complexitats:

### Complexitat d'una operació

*operació simple*

En general la complexitat d'aquest cas és d'ordre Constant, ja que no depèn de la mida de l'entrada. Però atenció, quan treballem amb llistes algunes operacions aparentment simples, tenen una complexitat d'ordre **n**. Recordeu que en anteriors sessions hem especificat l'ordre de complexitat de les operacions més habituals amb col.leccions. Altres complexitats les podeu consultar a <a href="https://wiki.python.org/moin/TimeComplexity">TimeComplexity </a>

- LLista.append('a')                    # complexitat O(1)
- Llista.insert(2,'a')                  # complexitat O(n)

### Complexitat d'un bloc condicional
+ if condicio:
    + operacio1
+ else:
    + operacio2

Quan ens trobem amb un bloc condicional (if, elif, else) la complexitat serà la màxima de les complexitats de les diferents opcions. Per ex. si complexitat(operacio1)=O(n) i complexitat(operacio2)=O(1), la complexitat del bloc if serà de O(n), que és l'opció amb més complexitat.

### Complexitat d'un conjunt d'instruccions

    def: funcio(): 
        operacio1 
        operacio2 
        operacio3 
        operacio4 
        operacio5 
        if condicio: 
            operacio6 
        else: 
            operacio7 


Quan s'agrupen diverses operacions simples la complexitat és la suma de totes elles, tenint en compte que quan treballem amb ordres de magnitud i sumem diverses quantitats, només ens quedem amb la cota superior, que és la que mana. 

Així si complexitat(operacio1)==complexitat(operacio2)==complexitat(operacio3) és O(1), i la complexitat(operacio4) és O(n^2), i la complexitat(operacio5) és O(log n), la complexitat de totes aquestes serà d'ordre O(n^2), que és la complexitat major. I sumant la complexitat del bloc condicional (operacio6 és O(n) i operacio7 és O(1)), seguim tenint O(n^2), ja que aquest ordre predomina sobre O(n).

La complexitat final d'aquest bloc és O(n^2).

### Complexitat dels blocs iteratius (bucles)

    for i in range(1,n): 
        operacio1 
    
    for j in range(1,n): 
        operacio1

En el cas dels bucles iteratius, primer cal calcular la complexitat de les operacions dins el bucle, i després multiplicar-les pel nombre de vegades que iterem.
En els exemples, si complexitat(operacio1) és O(1), la complexitat dels blocs és O(n), ja que tots -- en el pitjor cas -- iteren n vegades sobre aquesta operació.

### Complexitat dels blocs iteratius imbricats

    for i in range(1,n):
        for j in range(1,n): 
            operacio1

En el cas dels bucles imbricats cal multiplicar tantes vegades com bucles hi hagi. A l'exemple, la complexitat del bloc de la j és O(n) però la complexitat del bloc de la i és O(n^2). És a dir, aquest tros de codi té una complexitat quadràtica.

### Complexitat de les funcions recursives

#### Explicació de la recursió

La recursió consisteix en què un programa es crida a si mateix. Un programa recursiu ben fet ha de complir 2 condicions:

- ha d'haver-hi un o més casos base: són condicions de les dades que es resolen directament, sense que calgui una nova crida al programa
- a cada crida recursiva ens apropem a un dels casos base: ja sigui perquè es decrementa una variable, perquè es redueix una llista...

```python
Exemple
def imprimirLlistaRec(num):
    if (num == 0):
        print(num)
        return 0
    else:
        print(num)
        imprimirLlistaRec(num-1)

imprimirLlistaRec(5)
5
4
3
2
1
0
```

- A la primera execució del programa num valia 5, per tant no és un cas base, es fa el print i es fa una crida recursiva amb 4.
- A la segona execució val 4, s'imprimeix i es fa crida amb 3.
- A la tercera val 3, s'imprimeix i es fa crida amb 2.
- A la quarta val 2, s'imprimeix i es fa crida amb 1.
- A la cinquena val 1, s'imprimeix i es fa crida amb 0.
- A la sisena val 0, som al cas base!, s'imprimeix i acaba.

A vegades dins del programa no es fa una crida recursiva sinó dues o més. També pot variar com s'alteren les variables a cada crida, però sempre ens hem d'anar apropant al cas base.

Sovint farem un programa principal que faci un preprocés de les dades, cridi al programa recursiu, i després faci un postprocés.

```python
def imprimirLlista(num):
    print(f"Ara mostrarem els nombres de {num} a 0 de manera decreixent")
    imprimirLlistaRec(num)
    print("I això és tot.")
    
imprimirLlista(3)

Ara mostrarem els nombres de 3 a 0 de manera decreixent
3
2
1
0
I això és tot.
```

#### Càlcul complexitat
En aquest curs només heu vist com calcular la complexitat de les funcions recursives que segueixen el patró: T(n)=aT(n/b)+O(n^d), on a són els subproblemes generats i ha de ser >0,b és el divisor de n a cada crida i ha de ser >1 i d és el cost d'ajuntar les solucions,i ha de ser>0. El càlcul d'aquestes funcions es calcula segons el teorema de màster. 

Veiem-ne un exemple:

    def exponent(base,ponencia):
        if potencia==1: 
            return base 
        else:
            subsolucio=exponent(base,potencia/2)
            return subsolucio x subsolucio x base^potencia%2

Per calcular la complexitat hem de saber quants subproblemes es generen (a), per quant dividim la n en cada nova crida (b), i quin és l'exponent del cost d'ajuntar les solucions (d).

A la funció exponent anterior, aquests valors són, respectivament:

 + a=1, fem una única crida recursiva
 + b=2, a cada crida, n es parteix per dos
 + d=2, ja que ajuntar les solucions es fa amb una multiplicació  O(2)

Un cop tenim aquests valors, calculem el valor pel Teorema del màster aplicant el cas que correspon:

 + Si d>log base b d'a, el cost serà O(n^d)
 + Si d=log base b d'a, el cost serà O(n^d log n)
 + Si d<log base b d´a, el cost serà O(n^log b a)

A la funció exponent anterior:
log 2 1=0; per tant estem en el primer cas del teorema de màster, d>log b a, i el cost és d'ordre O(n^d), i com que d=2, això equival a O(n^2).
Podem concloure que la funció exponent té una complexitat de O(n^2).



# Fitxers

Sovint les dades d´un algorisme es troben a memòria permanent en un fitxer. Des de Python podem llegir i escriure fitxers amb algunes instruccions particulars. En aquesta assignatura només veurem fitxers de text.

## Obrir un fitxer i tancar-lo
Per poder treballar amb un fitxer primer de tot cal obrir-lo

**Atenció**: el fitxer ha de ser a la mateixa carpeta que la funció (que el notebook o que l'arxiu .py)

```python
elMeuFitxer = open("nom fitxer","mode") 
```
a on nom fitxer és el nom del fitxer en el disc i mode pot ser r (read) per llegir, w (write) per escriure [si no hi ha cap fitxer això el crea] o altres que no tractarem.

Per exemple:
```python
elMeuFitxer = open("prova.txt","r") 
```
obre el fitxer prova.txt en mode lectura (només podrem llegir, no escriure)

Hem de pensar sempre a tancar els fitxers un cop oberts perquè altrament es podrien produir resultats inesperats a l´hora de fer altres entrades o sortides o podriem tenir problemes de memòria.

```python
elMeuFitxer.close()
```

## Escriure 

Un cop tinguem el fitxer obert ja podem fer coses amb ell. Per ex:

```python
fitxer = open("fitxerprova.txt","w") 
 
fitxer.write("Hola món\n") # el caràcter \n indica salt de línia
fitxer.write("Aquest és el nostre fitxer de text nou\n") 
fitxer.write("i això és una línia nova\n") 
fitxer.write("I el fitxer s'ha creat.\n") 
 
fitxer.close() 
```

I efectivament si mirem el fitxer amb un editor de text, a dintre hi veurem:
```python
Hola món
Aquest és el nostre fitxer de text nou
i això és una línia nova
I el fitxer s´ha creat.
```

## Llegir

Quan llegim un fitxer python ens retorna un string amb el seu contingut

```python
file = open("fitxerprova.txt", "r") 
print(file.read())
file.close() 
```

Que ens mostrarà:

```python
    Hola món
    Aquest és el nostre fitxer de text nou
    i això és una línia nova
    I el fitxer s'ha creat.
```


o també podem optar a llegir-lo línia a línia
```python
file = open("fitxerprova.txt", "r") 
print(file.readlines())
file.close() 
```
Que ens mostrarà
```python
['Hola món\n', 'Aquest és el nostre fitxer de text nou\n', 'i això és una línia nova\n', 'I el fitxer s'ha creat.\n']
```

Podem també recorrer un fitxer dins una iteració:
```python
file = open("fitxerprova.txt", "r") 
for l in file:
    print(l)
file.close() 
```

Que ens mostrarà
```python
Hola món

Aquest és el nostre fitxer de text nou

i això és una línia nova

I el fitxer s'ha creat..
```

## Gestió elegant de fitxers
Quan volem fer diverses accions de lectura sobre un fitxer podem usar l´ordre with...

```python
with open("fitxerprova.txt") as file:  
    data = file.read() 
    do something with data 
```

amb el with obrim sempre en mode lectura, i no ens cal indicar el tancament

És molt recomanable doncs usar aquesta sintaxi quan s´escau.


## Referències
Les explicacions, exemples i exercicis s'han basat en les següents fonts:

- Singh et al. “Time complexity of algorithms” dins Study tonight [http://www.studytonight.com/data-structures/time-complexity-of-algorithms] consultat el 26 de novembre de 2015
- Umesh V. Vazirani “Chapter 2: divide and conquer algorithms” [https://www.cs.berkeley.edu/~vazirani/algorithms/chap2.pdf] consultat el 26 de novembre de 2015
- Cormen, T. C., Leiserson, C. E., Rivest, R. L., & Stein, C. (2009). *Introduction to algorithms* (3rd ed.). Cambridge: The MIT Press. ISBN 9780262033848
- Python for beginners "Reading and writing files in Python. Overview" http://www.pythonforbeginners.com/files/reading-and-writing-files-in-python
