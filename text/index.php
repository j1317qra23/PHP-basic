Table products
+-------------+---------+
| Column Name | Type    |
+-------------+---------+
| product_id  | int     |
| name        | varchar |
+-------------+---------+


Table product_images
+-------------------+--------------+
| Column Name       | Type         |
+-------------------+--------------+
| product_image_id  | int          |
| product_id        | int (FK)     |  關聯 products.product_id
| url               | varchar(256) |
| sort_order        | int          |
+-------------------+--------------+

以下是資料
Table products
+-------------+---------+
| product_id  | name    |
+-------------+---------+
| 1           | clothes |
| 2           | shoes   |
| 3           | toy     |
+-------------+---------+

Table product_images
+-------------------+---------------+--------------------------------+--------------+
| product_image_id  | product_id    |  url                           |  sort_order  |
+-------------------+---------------+--------------------------------+--------------+
| 1                 | 1             |  https://img.com/clothes0.jpg  |  1           |
| 1                 | 1             |  https://img.com/clothes1.jpg  |  2           |
| 1                 | 1             |  https://img.com/clothes2.jpg  |  3           |
| 1                 | 2             |  https://img.com/shoes0.jpg    |  1           |
| 1                 | 2             |  https://img.com/shoes1.jpg    |  2           |
| 1                 | 3             |  https://img.com/toy0.jpg      |  1           |
+-------------------+---------------+--------------------------------+--------------+

幫我輸出每個商品的資料跟商品排序第一張圖
+-------------+---------+-------------------------------+
| product_id  | name    | url                           |
+-------------+---------+-------------------------------+
| 1           | clothes | https://img.com/clothes0.jpg  |
| 2           | shoes   | https://img.com/shoes0.jpg    |
| 3           | toy     | https://img.com/toy0.jpg      |
+-------------+---------+-------------------------------+