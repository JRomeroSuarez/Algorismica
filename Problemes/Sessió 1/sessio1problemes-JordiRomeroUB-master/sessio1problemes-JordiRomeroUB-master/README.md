# Sessió 1: Python 1: tipus, llistes i iteracions

## Objectius
+ Saber fer operacions i gestionar variables amb enters, booleans, decimals i cadenes de text
+ Saber fer operacions bàsiques amb llistes
+ Conèixer el codi dels blocs ``if`` i de les iteracions ``for``

## Tipus 

Hi ha alguns tipus de dades bàsics que heu de conèixer per poder treballar amb Python: les cadenes de text, els enters, els decimals i els booleans.

### Cadenes de text (strings)

Una string és un text amb 0 o més caràcters. A Python els strings s'indiquen amb cometes simples o dobles. Si cal posar cometes dins el text podem usar la barra inversa \

```python
print('Això m\'agrada')
```
També hi ha una altra solució:

```python
print("Això m'agrada")
```

### Enters (integers)
Un ``int`` és un nombre que pertany al conjunt format pels nombres naturals, els negatius dels nombres natuarals i el 0. Els ordinadors poden respresentar enters fins a un límit (sempre ho farem amb un conjunt finit de bits) però amb els ordinadors actuals i per la majoria de problemes això no representa una limitació. 

Executa aquest codi i mira el resultat:

```python
print(234**7456)
```

Els enters s'han d'escriure sense el punt dels milers. Prova el següent codi i observa què passa:

```python
print(1.000.000.000)
```

Els enters també es poden representar en binari usant la funció ``bin``:

```python
print(4)
print(bin(4))
```

### Decimals (floats)
Un ``float`` és un nombre decimal. A Python, com en anglès, s'escriuen amb un punt separant la part entera de la part decimal. Com en el cas dels enters també hi ha un límit en la seva representació i en la precisió; aquests límits ens afectaran si usem càlculs amb nombres molt grans o amb molta precisió.

Degut a la representació interna dels decimals a Python, algunes operacions poden retornar valors curiosos. Per exemple:

```python
print((431/100)*100)
```

Retornarà 430.99999999999994 i no 431 com seria d’esperar. Per evitar-ho podeu usar les funcions ``round()``, ``ceiling()`` i ``floor()`` que arrodoneixen a l’enter més proper, a l’enter superior o a l’enter inferior respectivament.

```python
a=4.7
b=5.3
import math
print (a, round(a), math.ceil(a), math.floor(a))
print(b, round(b), math.ceil(b), math.floor(b))
```
### Booleans

Per conèixer més en detall els booleans consulteu si-us-plau els apunts de l'assignatura sobre llistes

- [Booleans](apunts/booleans.ipynb) 

### Conversió forçosa de tipus

A vegades podem forçar que una dada passi a ser d'un tipus determinat. Per fer-ho usarem l'expressió: ``nomTipus(valor)``. Vegeu els següents exemples:

```python
print(15/4)
print(int(15/4))
print(15+4)
print(float(15+4))
print("Jo tinc "+str(10)+" pomes")
```


## Llistes 

Per conèixer més en detall les llistes consulteu si-us-plau els apunts de l'assignatura sobre llistes

- [Llistes](apunts/colleccions.ipynb) 


## Blocs de control 

Per conèixer més en detall el funcionament de les estructures de control consulteu si-us-plau els apunts de l'assignatura sobre llistes

- [Estructures de control](apunts/control.ipynb)

