<?php
/*


categories
1. Shoes,
2. clothes,
3. garments

One To Many
shopkeepers             catgory_id (Removed this column)             catgories_id (failed method)
1. Hamza Ashraf             1 (Shoes)               1,2,3
2. Shazab                   2 (clothings)           3,2
3. Talha Ashraf             3 (garments)            2,3



Many To Many
catgory_shopkeeper   (pivot table) Darmayana/Center Wala

catgory_id shopkeeper_id
1           2
2           2
3           2

*/
