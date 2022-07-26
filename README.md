1. Download and install Xampp on Your computer (local server)
2. Download and install Live Server in VisualStudioCode
3. Download and install Live Server Web Extension in Your browser
4. Run Xampp, click start to Apache and MySQL
5. Create folder on Your computer in: xampp/htdocs (egz. PhoneKeyboardConverter)
6. Copy files to Your xampp-folder (path:  xampp/htdocs/PhoneKeyboardConverter )
7. Open folder "PhoneKeyboardConverter" with VisualStudioCode and go to index.php file -> click "Go Live" in the bottom right corner, copy URL
8. In the upper right corner of Your browser click Live Server Web Extension Icon
  a) in Actual Server Address write:   http://localhost/Server
  b) in Live Server Address paste copied URL from point 7
9. Open new window in Your browser and write:   localhost/PhoneKeyboardConverter   ->and click enter
10. Here You are :)


Description:
It works like a keyboards of the old cell phones -> To write a text with them, you had to press a given numeric key the appropriate number of times, for example, "ULA" was written as 885552. You have to separate letters with a comma.

Examples:

EXAMPLE1: Ela nie ma kota   ->returns->   33,555,2,0,66,444,33,0,6,2,0,55,666,8,2

EXAMPLE2: 5,2,22,555,33,222,9999,66,444,55    ->returns->   jablecznik
