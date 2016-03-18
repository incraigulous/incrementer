# Incrementer

A simple CraftCMS plugin that allows you to increment or decrement fields via ajax request.

Increment via ajax request
--------------------------

**POST:** /actions/incrementer/field/increment

**Example request:**
`````
 {
    entryId: 1765
    fieldHandle: spotsAvailable
    incrementBy: 1
 }
`````

 **Response:**
 `````
 {
     success: true
     value: 3    //New value
 }
 `````
 
Decrement via ajax request
--------------------------

**POST:** /actions/incrementer/field/decrement

**Example request:**
`````
 {
    entryId: 1765
    fieldHandle: spotsAvailable
    decrementBy: 1
 }
 `````

 **Response:**
 `````
 {
     success: true
     value: 3    //New value
 }
 `````
