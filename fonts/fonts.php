<?php 

$fonts = array();

//Font basic-hash -------------------------------------------------------

function add_basic_hash_font() {
    $font = array();

$font["A"] =
'
````#````
```#`#```
``#```#``
`#`````#`
`#######`
`#`````#`
`#`````#`
';
    
$font["B"] = 
'
`######``
`#`````#`
`#`````#`
`######``
`#`````#`
`#`````#`
`######``
';
    
$font["C"] = 
'
````###```
``#`````#`
`#````````
`#````````
`#````````
``#`````#`
````###```
';
    
$font["D"] = 
'
`#####````
`#`````#``
`#``````#`
`#``````#`
`#``````#`
`#`````#``
`#####````
';
    
$font["E"] = 
'
`#######`
`#```````
`#```````
`#######`
`#```````
`#```````
`#######`
';
    
$font["F"] = 
    '
````#######````
````#``````````
````#``````````
````#######````
````#``````````
````#``````````
````#``````````
';
    
$font["G"] = 
'
``````###``````
````#`````#````
```#```````````
```#```####````
```#``````#````
````#`````#````
``````###``````
';
    
$font["H"] = 
'
`#`````#`
`#`````#`
`#`````#`
`#######`
`#`````#`
`#`````#`
`#`````#`
';
    
$font["I"] = 
'
````#######````
```````#```````
```````#```````
```````#```````
```````#```````
```````#```````
````#######````
';
    
$font["J"] = 
    '
``````#####````
``````````#````
``````````#````
``````````#````
``````````#````
````#`````#````
``````###``````
    ';
    
$font["K"] = 
    '
````#`````#````
````#```#``````
````#`#````````
````##`````````
````#`#````````
````#```#``````
````#`````#````
    ';
    
$font["L"] = 
    '
`#```````
`#```````
`#```````
`#```````
`#```````
`#```````
`#######`
    ';
    
$font["M"] = 
    '
```##`````##```
```#`#```#`#```
```#``#`#``#```
```#```#```#```
```#```````#```
```#```````#```
```#```````#```
    ';
    
$font["N"] = 
    '
`#``````#`
`##`````#`
`#`#````#`
`#``#```#`
`#```#``#`
`#````#`#`
`#``````#`
    ';

$font["O"] =
'
````###````
``#`````#``
`#```````#`
`#```````#`
`#```````#`
``#```` #``
````###````
'; 

$font["P"] = 
    '
`######``
`#`````#`
`#`````#`
`######``
`#```````
`#```````
`#```````
';

$font["Q"] =
'
``````###``````
````#`````#````
```#```````#```
```#```````#```
```#``#````#```
````#```# #````
``````###``##``
'; 

$font["R"] = 
    '
`######``
`#`````#`
`#`````#`
`######``
`#`#`````
`#`` #```
`#`````#`
';

$font["S"] =
'
``#####``
`#`````#`
`#```````
``#####``
```````#`
`#`````#`
``#####``
'; 

$font["T"] = 
'
`#########`
`````#`````
`````#`````
`````#`````
`````#`````
`````#`````
`````#`````
';

$font["U"] =
'
```#```````#```
```#```````#```
```#```````#```
```#```````#```
```#```````#```
````#`````#````
``````###``````
'; 

$font["V"] =
'
```#```````#```
```#```````#```
```#```````#```
````#`````#````
`````#```#`````
``````#`#``````
```````#```````
'; 

$font["W"] =
'
`#`````````#`
`#`````````#`
`#`````````#`
`#`````````#`
`#````#````#`
``#``#`#``#``
```#`````#```
'; 

$font["X"] =
'
```#```````#```
````#`````#````
`````#```#`````
```````#```````
`````#```#`````
````#`````#````
```#```````#```
'; 

$font["Y"] =
'
```#```````#```
````#`````#````
`````#```#`````
```````#```````
```````#```````
```````#```````
```````#```````
'; 

$font["Z"] =
'
```#########```
````````#`#````
```````#`#`````
``````#`#``````
`````#`#```````
````#`#````````
```########````'; 

$font[" "] =
'
``````
``````
``````
``````
``````
``````
``````
'; 
    return $font;
}

$fonts["basic-hash"] = add_basic_hash_font();