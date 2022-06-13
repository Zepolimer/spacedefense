# Questions  

  1. **What is the complexity of your algorithm (in big O notation) ?**
  I think that the complexity of my algorithm is 0(1) because the data structure needs two arrays, which can contains at least and at most 25 objects. As the objects numbers are constant, my algorithm seems to be of constant complexity. 

  2. **How would you improve your algorithm ?**
  In my opinion, y algorithm could be improved in two ways.

  Firstly, I could create a method to generate similar objects instances multiplicated by a number. For exemple, I could create an offensive ship, named battleship and with a new integer paramater, for exemple 7, this will create 7 objects instances in one time. 

  Lately, I could divide my algorithm in major methods to see all the ships random position before they get attacked. 

  3. **How would your adapt your algorithm to three dimensions? How would that affect the complexity ?**
  I will add a new parameter which will correspond to z on the main model class (Ship). On the constructor, I will add a new method to generate a random number between 1 and N and a new method to affect a number on whille loop for each offensive and support craft to keep them close together. 
