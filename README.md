Add your TODOs here:

1. Login admin FE C
2. Login user FE C
3. Login Admin Backend C
4. Login User Backend C

5. * Forgot password \* -> NC

-------------- ADMIN -------------------

1. Flats - 3 pages C
2. Flat Area - 3 pages C
3. Bills - 3 page \* - NC
4. Complaints - 5 pages - C
5. Visitors - NC
6. Security - Add,manage C ; Security login- NC
7. Meetings - 3 pages - NC
8. Shoutbox - 1 page - C
9. Report - 3 pages - NC
10. Search - 3 pages - NC
11. Dashboard - 1 page - NC
12. Allotment - 3 pages -C
13. Profile - NC

-------------- USER -------------------

1. Bills - 1 page - NC
2. Complaints - 4 pages - C
3. Visitors - NC
4. Security - 1 page (view security guards) - C 
5. Meetings - 3 pages - NC
6. Shoutbox - 1 page - C
7. Report - 1 pages - NC
8. Search - 1 pages - NC
9. Dashboard - 1 page - NC
10. Profile - NC

---------------- EXTRA ------------------

1. Excel Import - Has been implemented for flatarea; flats, allotments, visitors,security is left
2. OTP - has been implemented for login; visitors is left
3. Download as excel- done for all tables
4. Email - for bills and forgot password(admin) is left
5. Payment - last priority


To modify:

1. For user profile, check if the logged in person is a rentee, if he is a rentee then allow only rentee fields to be changed; if he is a owner, then allow only the owner details to be changed. 
2. For 2, we have to store a login_role in session, for the user as well => owner or rentee depending on the login contact number
3. Complete EXCEL IMPORT for all the modules first
4. For bills, after generating, should we give an option to modify? Because there are no fields except for additional charges
5. After generating the bill, how will the admin come to know that the users have paid the bill or not
6. How should we display the bill on the user side, other than mailing a pdf to him. 