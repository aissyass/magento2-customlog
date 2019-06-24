
# Custom Log File  
While you develop a Magento 2 website, it's very **important** to create the log text to monitor the errors and system information.  
  
By default in Magento 2, you can use the class **Psr\Log\LoggerInterface** to create the log text, it will be saved in the system.log file. However, it is difficult to open or read this file when the file size is large because it saves all the log text of a Magento 2 website.  
  
It is easier if you create a new custom log file and save the log text for each your task.  
  
So drari, I am going to create a new custom log file having the format **customer-Y-m-d.log**, with the "**Y-m-d**" will be the date of the log text saved. Every when the customer logs in I will save the customer information in this log file.  
  
This is just a example, You can inject the custom log in your catch treatment (I mean when catched you will save errors in a text file..)  
  
## To test this module :  
- Create the namespace PHPAISS in the path app\code  
- Create the module named CustomLog in the path app\code\PHPAISS  
- Clone this files and put them into folder app\code\PHPAISS\CustomLog  
- Run the following command lines:    
  ``bin/magento setup:upgrade --keep-generated``    
  ``bin/magento cache:flush``
- Go to the storefront, the customer tries to log in
- Go to folder var/ and see the file **customer-Y-m-d.log**

In the file **app\code\PHPAISS\CustomLog\Observer\CustomerLoginSuccess.php** at line 40 :     
``
$this->loggerCustomer->info('Customer ID: '.$customer->getId().' has been logged in successfully!');
``

There are other functions like warning() error()...     
You can see the file **\Monolog\Logger** and read the comments.

<img src="https://support.shopgate.com/hc/en-us/article_attachments/213767307/magento-logo.png" width="350"/>

Don't forget to star and share the repository with your friends.
