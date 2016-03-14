<?php

$S_HOME = 'Home';                                               //Forwards to home page
$S_ADMIN = 'Manage';                                            //Forwards to Management Panel
$S_RETURN = 'Return';                                           //Returns to image board
$S_POSTING = 'Posting mode: Reply';                             //Prints message in red bar atop the reply screen
$S_NOTAGS = 'HTML tags are allowed.';                           //Prints message on Management Board
$S_NAME = 'Name';                                               //Describes name field
$S_EMAIL = 'E-mail';                                            //Describes e-mail field
$S_SUBJECT = 'Subject';                                         //Describes subject field
$S_SUBMIT = 'Submit';                                           //Describes submit button
$S_COMMENT = 'Comment';                                         //Describes comment field
$S_UPLOADFILE = 'File';                                         //Describes file field
$S_NOFILE = 'No File';                                          //Describes file/no file checkbox
$S_DELPASS = 'Password';                                        //Describes password field
$S_DELEXPL = ' (For file deletion)';               //Prints explanation for password box (to the right)
$temp = '<ul><li>Supported file types are: GIF, JPG, PNG</li>';
if (GIF_ONLY)   $temp = '<ul><li>Supported file types are: GIF</li>';
if (USE_BBCODE) $temp .= '<li><b>BBCode</b> and <b>Markdown</b> are enabled for this board.';
$S_RULES = $temp . '<li>Maximum file size allowed is '.MAX_KB.' KB.</li>
            <li>Images greater than '.MAX_W.'x'.MAX_H.' pixels will be thumbnailed.</li>
            <li>Images smaller than '.MIN_W.'x'.MIN_H.' pixels will be refused.</li></ul>';                                             //Prints rules under posting section
$S_REPORTERR = 'Error: Cannot find reply.';                     //Returns error when a reply (res) cannot be found
$S_THUMB = '';                                                  //Prints instructions for viewing real source
$S_PICNAME = 'File: ';                                         //Prints text before upload name/link
$S_REPLY = 'Reply';                                             //Prints text for reply link
$S_OLD = 'Marked for deletion (old).';                          //Prints text to be displayed before post is marked for deletion, see: retention
$S_RESU = '';                                                   //Prints post?
$S_ABBR = ' posts omitted. Click Reply to view.';               //Prints text to be shown when replies are hidden
$S_REPDEL = 'Delete Post ';                                     //Prints text next to S_DELPICONLY (left)
$S_DELPICONLY = 'File Only';                                    //Prints text next to checkbox for file deletion (right)
$S_DELKEY = 'Password ';                                        //Prints text next to password field for deletion (left)
$S_DELETE = 'Delete';                                           //Defines deletion button's name
$S_NODELPOST = 'Cant find post #';                              //On deletion when post not found.
$S_PREV = 'Previous';                                           //Defines previous button
$S_FIRSTPG = 'Previous';                                        //Defines previous button
$S_NEXT = 'Next';                                               //Defines next button
$S_LASTPG = 'Next';                                             //Defines next button
$S_FOOT = '- <a href="http://www.2chan.net/" target="_blank">futaba</a> + <a href="http://1chan.net/futallaby/" target="_blank">futallaby</a> + <a href="http://saguaroimgboard.tk/" target="_blank">saguaro 1.3.10</a> -'; //Prints footer (leave these credits)
$S_RELOAD = 'Return';                                           //Reloads the image board (refresh)
$S_UPFAIL = 'Error: Upload failed.';                            //Returns error for failed upload (reason: unknown?)
$S_NOREC = 'Error: Cannot find record.';                        //Returns error when record cannot be found
$S_SAMEPIC = 'Error: Duplicate md5 checksum detected.';         //Returns error when a md5 checksum dupe is detected
$S_TOOBIG = 'This image is too large!  Upload something smaller!';
$S_TOOBIGORNONE = 'Either this image is too big or there is no image at all.  Yeah.';
$S_UPGOOD = ' '.$upfile_name.' uploaded!<br /><br />';          //Defines message to be displayed when file is successfully uploaded
$S_STRREF = 'Error: String refused.';                           //Returns error when a string is refused
$S_UNJUST = 'Error: Unjust POST.';                              //Returns error on an unjust POST - prevents floodbots or ways not using POST method?
$S_NOPIC = 'Error: No file selected.';                          //Returns error for no file selected and override unchecked
$S_NOTEXT = 'Error: No text entered.';                          //Returns error for no text entered in to subject/comment
$S_MANAGEMENT = 'Manager : ';                                   //Defines prefix for Manager Post name
$S_DELETION = 'Deletion';                                       //Prints deletion message with quotes?
$S_TOOLONG = 'Error: Field too long.';                          //Returns error for too many characters in a given field
$S_UNUSUAL = 'Error: Abnormal reply.';                          //Returns error for abnormal reply? (this is a mystery!)
$S_BADHOST = '';                                                //Returns error for banned host ($badip string)
$S_PROXY80 = 'Error: Proxy detected on :80.';                   //Returns error for proxy detection on port 80
$S_PROXY8080 = 'Error: Proxy detected on :8080.';               //Returns error for proxy detection on port 8080
$S_SUN = 'Sun';                                                 //Defines abbreviation used for "Sunday"
$S_MON = 'Mon';                                                 //Defines abbreviation used for "Monday"
$S_TUE = 'Tue';                                                 //Defines abbreviation used for "Tuesday"
$S_WED = 'Wed';                                                 //Defines abbreviation used for "Wednesday"
$S_THU = 'Thu';                                                 //Defines abbreviation used for "Thursday"
$S_FRI = 'Fri';                                                 //Defines abbreviation used for "Friday"
$S_SAT = 'Sat';                                                 //Defines abbreviation used for "Saturday"
$S_ANONAME = 'Anonymous';                                       //Defines what to print if there is no text entered in the name field
$S_ANOTEXT = '';                                                //Defines what to print if there is no text entered in the comment field
$S_ANOTITLE = '';                                               //Defines what to print if there is no text entered into subject field
$S_RENZOKU = 'Error: Flood detected, post discarded.';          //Returns error for $sec/post spam filter
$S_RENZOKU2 = 'Error: Flood detected, file discarded.';         //Returns error for $sec/upload spam filter
$S_RENZOKU3 = 'Error: Flood detected.';                         //Returns error for flood? (don't know the specifics)
$S_DUPE = 'Error: Duplicate file entry detected.';              //Returns error for a duped file (same upload name or same tim/time)
$S_NOTHREADERR = 'Error: Thread specified does not exist.';     //Returns error when a non-existant thread is accessed
$S_SCRCHANGE = 'Updating page.';                                //Defines message to be displayed when post is successful    
$S_TOODAMNSMALL = 'Error: Image too small.';                    //Error for small images                                //
$S_BADDELPASS = 'Error: Password incorrect.';                   //Returns error for wrong password (when user tries to delete file)
$S_WRONGPASS = 'Error: Username or password invalid.';          //Returns error for wrong password (when trying to access Manager modes)
$S_RETURNS = 'Return';                                          //Returns to HTML file instead of PHP--thus no log/SQLDB update occurs
$S_LOGUPD = 'Update';                                           //Updates the log/SQLDB by accessing the PHP file
$S_MANAMODE = "  [ <a href='#' onclick=\"toggle_visibility('adminForm');\" style='color:white;text-align:center;' >Toggle Admin Post Form</a> ]";                                   //Prints heading on top of Manager page
$S_MANAREPDEL = 'Management Panel';                             //Defines Management Panel radio button--allows the user to view the management panel (overview of all posts)
$S_MANAPOST = 'Manager Post';                                   //Defines Manager Post radio button--allows the user to post using HTML code in the comment box
$S_MANASUB = 'Submit';                                          //Defines name for submit button in Manager Mode
$S_DELLIST = 'Deletion Panel';                                  //Prints sub-heading of Management Panel
$S_ITDELETES = 'Delete';                                        //Defines for deletion button in Management Panel
$S_MDRESET = 'Reset';                                           //Defines name for field reset button in Management Panel
$S_MDONLYPIC = 'File Only';                                     //Sets whether or not to delete only file, or entire post/thread
$S_MDTABLE1 = '<th></th><th>#</th><th>Time</th><th>Subject</th>'; //Explains field names for Management Panel (Delete?->Subject)
$S_MDTABLE2 = '<th>Name</th><th>Comment</th><th>Image</th><th>Host</th><th>Age</th><th>More</th>'; //Explains names for Management Panel (Name->md5)
$S_RESET = 'Reset';                                             //Sets name for field reset button (global)
$S_IMGSPACEUSAGE = 'Space used :';                              //Prints space used KB by the board under Management Panel
$S_CANNOTWRITE = 'Error: Cannot write to directory.<br />';     //Returns error when the script cannot write to the directory, this is used on initial setup--check your chmod (777)
$S_NOTWRITE = 'Error: Cannot write to directory.<br />';        //Returns error when the script cannot write to the directory, the chmod (777) is wrong
$S_NOTREAD = 'Error: Cannot read from directory.<br />';        //Returns error when the script cannot read from the directory, the chmod (777) is wrong
$S_NOTDIR = 'Error: Directory does not exist.<br />';           //Returns error when the script cannot find/read from the directory (does not exist/isn't directory), the chmod (777) is wrong
$S_SQLCONF = 'MySQL connection failure';                        //MySQL connection failure
$S_SQLDBSF = 'Database error, check SQL settings <br />';       //database select failure
$S_TCREATE = 'Creating table: ';                                //creating table
$S_TCREATEF = 'Unable to create table: ';                       //table creation failed
$S_SQLFAIL = 'Critical SQL problem! <br />';                    //SQL Failure
$S_QUOTE = 'Quote';
$S_PERMALINK = 'Permalink thread';
$S_RESNUM = 'Reply to thread:';
$S_BANS = 'Ban';
$S_BANS_EXTRA = '';
$S_CAPFAIL = 'Error: You forgot to solve the CAPTCHA. Please try again.';
$S_THREADLOCKED = 'You cannot reply to a locked thread.';
$S_LOGOUT = 'Logout';
$S_SPOILERS = 'Spoiler Image';


$S_NOFILE = '---';
$S_DELRES = 'Deletion mode: Viewing thread #';
$S_DELALL = 'Deletion mode: All';
$S_DELIP = 'Deletion mode: Viewing all posts by IP from #';
$S_DELOPS = 'Deletion mode: All opening posts (OPs)';


//Introducing...new system error strings!
$S_NOPERM = 'Permission denied!';
$S_UPDERR = 'File could not be updated!';
$E_REGFAILED = 'Post registration failed!';

?>
