
# Sessió 6: Ordenació i cerca

En aquesta sessió revisem i apliquem els principals algorismes d'ordenació i cerca vistos a teoria. La majoria de problemes en que volem moure elements en una llista o cercar alguns valors específics són variacions d'aquests problemes. 

És per això que cal entendre molt bé el funcionament d'aquests algorismes bàsics per així poder-los adaptar al problema particular a resoldre.

### Mergesort, de complexitat O(n log n)


```python
def merge(left, right):
    """
    Aquesta funció fusiona dues llistes ordenades amb una de nova, també ordenada
    """
    result = []
    i ,j = 0, 0
    while(i < len(left) and j < len(right)):
        if (left[i] <= right[j]):
            result.append(left[i])
            i = i + 1
        else:
            result.append(right[j])
            j = j + 1

    result += left[i:]
    result += right[j:]
    return result
```


```python
def mergesort(list):
    """
    Aquesta funció va partint la llista en una banda dreta i una esquerra
    fins que aquestes bandes tenen un element
    quan ho aconsegueix, crida merge per fusionar ambdues bandes de 
    manera ordenada
    fins arribar a fusionar la llista completa original.
    """
    if len(list) < 2:
        return list
    else:
        middle = len(list) // 2
        left = mergesort(list[:middle])
        right = mergesort(list[middle:])
        return merge(left, right)
```


```python
mergesort([9,8,4,2,7,-4,3])
```




    [-4, 2, 3, 4, 7, 8, 9]



### Quicksort, de complexitat O(n log n)


```python
def partition(A, first, last):
    """
    Aquesta funció tria el valor mig entre l'element inicial, final i mig 
    d'una llista i l'ubica al lloc que li correspondrà quan la llista està 
    ordenada, alhora deixa a la seva esquerra valors menors i a la dreta
    valors majors. Per tant altera A
    A més retorna la posició de la partició
    """
    mid = (first + last)//2  #ordenem A[first],A[mid],A[last]
    if A[first] > A [mid]: A[first], A[mid] = A[mid], A[first]
    if A[first] > A [last]: A[first], A[last] = A[last], A[first]
    if A[mid] > A[last]:   A[mid], A[last] = A[last], A[mid]  
    A[mid], A[first] = A[first], A[mid] #valor mig a l’inici
    pivot = first
    i = first + 1
    j = last
  
    while True:
        while i <= last and A[i] <= A[pivot]: i += 1
        while j >= first and A[j] > A[pivot]: j -= 1
        if i >= j: break
        else:
            A[i], A[j] = A[j], A[i] #intercanviem, fem avançar i j
    A[j], A[pivot] = A[pivot], A[j] #vector partit, pivot=j
    return j
```


```python
def quick_sort(A):
    quick_sort_r(A, 0, len(A) - 1)

def quick_sort_r(A , first, last):
    if last > first:
        pivot = partition(A, first, last)
        quick_sort_r(A, first, pivot - 1)
        quick_sort_r(A, pivot + 1, last)
```


```python
A=[9,8,4,2,7,-4,3]
quick_sort(A)
print(A)
```

    [-4, 2, 3, 4, 7, 8, 9]
    

### Cerca lineal, de complexitat O(n)


```python
def search(x,nums):
    nums.append(x)
    i=0
    while nums[i] != x:
        i += 1
    if i<len(nums)-1: 
        return i
    else: 
        return -1
```


```python
search(10,[9,8,4,2,7,-4,3])
```




    -1



### Cerca binària, de complexitat O(logn)


```python
def binsearch(x,nums):
    recbinsearch(x,nums,0,len(nums)-1)
    
    
def recbinsearch(x, nums, low, high):
    # low, high defineixen els limits de la llista
    # on buscar, així no cal crear noves llistes
    if low>high: 
        return -1
    mid = (low + high) // 2    
    items = nums[mid]   
    if items == x:
        print(mid)
    elif x < items:
        return recbinsearch(x,nums,low,mid-1)
    else: 
        return recbinsearch(x,nums,mid+1,high)
```


```python
binsearch(5,[1,2,3,4,5,6,7])
```

    4
    

## Cerca hash, de complexitat O(1)
