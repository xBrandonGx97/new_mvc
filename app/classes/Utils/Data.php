<?php
    namespace Classes\Utils;
    class Data {
        public function __construct(){

        }

        public function escData($data){
			if(!isset($data) or empty($data)){
				return '';
			}

			if(is_numeric($data)){
				return $data;
			}

			$non_displayables = array(
										'/%0[0-8bcef]/',
										'/%1[0-9a-f]/',
										'/[\x00-\x08]/',
										'/\x0b/',
										'/\x0c/',
										'/[\x0e-\x1f]/'
//										'/<p\b[^>]*>(.*?)<\/p>/i'
			);

			foreach($non_displayables as $regex){
				$data = preg_replace($regex,'',$data);
				$data = str_replace("'","''",$data);
			}
			# Remove any indentations
			$data = str_replace("	","&#09;",$data);
			$data = str_replace("		","&#09;&#09;",$data);
			#$data = str_replace("     ","&nbsp;&nbsp;",$data);
			$data = str_replace("\t","&#09;",$data);
			$data = str_replace("\t\t","&#09;&#09;",$data);
			# Next replace unify all new-lines into unix LF
			$data = str_replace("\r","\n",$data);
			$data = str_replace("\n\n","\n",$data);
			# Replace all new lines with the unicode
			$data = str_replace("\n","<br>",$data);
			# Replace any new line entities between >< with a new line
			$data = str_replace(">&#10;<",">\n<",$data);

			return $data;
		}

        public function online_status_2_text($data,$color=false){
			switch($data){
				case 0:
					if($color){
						return '<span class="label label-danger">Offline</span>';
					}
					else{
						return 'Offline';
					}
				break;
				case 1:
					if($color){
						return '<span class="label label-success">Online</span>';
					}
					else{
						return 'Online';
					}
				break;
			}
		}

		public function MessagesArr($data){
			switch($data){
				# SITE-WIDE MESSAGES
				case 'ERR-0x01' : return 'The page you are looking for either doesn\'t exist or has been moved.'; break;
				# LOGIN MSGS - STANDARD
				case 'L-0x01': return 'A Username or Email is required. How else would you be able to log in?'; break;
				case 'L-0x02': return 'Your UserID must be between 3 and 16 characters in length.'; break;
				case 'L-0x03': return 'Your UserID must consist of numbers and letters only.<br>Special characters are not allowed.'; break;
				case 'L-0x04': return 'A password is required for all accounts.<br>Please provide a password.'; break;
				case 'L-0x05': return 'Your password must be between 3 and 16 characters in length.'; break;
				case 'L-0x06': return 'Your password must consist of numbers and letters only.<br>Special characters are not allowed.'; break;
				case 'L-0x08': return 'Login successful.<br>Loading your homepage now...'; break;
				case 'L-0x09': return 'Unable to locate an account with the information that you provided.<br>If you believe this to be in error, please notify an Admin so that this issue can be resolved.'; break;
				# LOGIN MSGS - SHAIYA
				case 'L-0x07': return 'Your account has been banned due to rules infractions.<br>To find out what infraction you were banned for, as well as ban period,<br>please ask a GM or GS.'; break;

				# Registration Messages
				# Username
				case 'R-0x01': return 'Please provide a Username.'; break;
				case 'R-0x02': return 'Username must be between 3 and 16 characters in length.'; break;
				case 'R-0x03': return 'Username must consist of numbers and letters only.'; break;
				case 'R-0x04': return 'Username already exists, please choose a different Username.'; break;
				# DisplayName
				case 'R-0x05': return 'Please provide a Display name.'; break;
				case 'R-0x24': return 'Display name must consist of numbers and letters only.'; break;
				case 'R-0x25': return 'Display name already exists. please choose a different display name.'; break;
				# Password
				case 'R-0x06': return 'Please provide a password.'; break;
				case 'R-0x07': return 'Password must be between 3 and 16 characters in length.'; break;
				case 'R-0x08': return 'Passwords do not match.'; break;
				# Date of Birth
				case 'R-0x09': return 'Please provide a Date of birth.'; break;
				# Gender
				case 'R-0x10': return 'Please provide your Gender.'; break;
				# E-Mail
				case 'R-0x11': return 'Please provide your e-mail.'; break;
				case 'R-0x12': return 'Invalid e-mail format'; break;
				case 'R-0x13': return 'The e-mail address provided has already been used. Please choose a different e-mail address.'; break;
				# Referer
                case 'R-0x26': return 'Please provide a Referer. If none then choose none.'; break;
                # Google Recaptcha
                case 'R-0x27': return 'Google Recaptcha Verification Failed, Please Try Again!'; break;
				# Security Q & A
				case 'R-0x14': return 'Please provide a Security Question.'; break;
				case 'R-0x15': return 'Please provide a Security Answer.'; break;
				# ToS
				case 'R-0x16': return 'You must agree to our Terms Of Use to register.'; break;
				# Validation - User
				case 'R-0x17': return 'Game account creation has failed. Please contact an admin for assistance.'; break;
				case 'R-0x18': return 'Your account, <font class="b_i">'.$_SESSION["REG_TEXT"][1].',</font> has been successfully created!'; break;
				# Validation - Web
				case 'R-0x19': return 'Web account creation has failed. Please contact an admin for assistance.'; break;
				case 'R-0x20': return 'Your web account, <font class="b_i">'.$_SESSION["REG_TEXT"][0].' for '.$_SESSION["REG_TEXT"][1].',</font> has been successfully created!'; break;
				# Validation - Email
				case 'R-0x21': return 'Verification e-mail failed to send to the e-mail that you provided. Please contact an administrator for further assistance.'; break;
				case 'R-0x22': return 'A verification email has been sent to <font class="b_i">'.$_SESSION["REG_TEXT"][9].'</font>.<br>Please check your e-mail to complete your registration.<br>If the e-mail is not in your Inbox, please check your Spam folder.'; break;
				# Resend
				case 'R-0x23': return 'A verification email has been resent to <font class="b_i">'.$_SESSION["REG_TEXT"][9].'</font> with an activation key for the account <font class="b_i">'.$_SESSION["REG_TEXT"][1].'</font>.<br>Please check your e-mail to complete your registration.<br>If the e-mail is not in your Inbox, please check your Spam folder.<br>Still didn\'t receive the e-mail? Contact an administrator for further assistance.'; break;
				# Misc
				case 'M-0x01': return 'I see that you\'re new here. You must <strong>Register</strong> in order to view the rest of <font class="b_i">My Domain</font>.<br>If you already have an account, you can update it by clicking <strong><a href="javascript:;" class="open_acct_reset_modal" data-id="UserIP~'.$this->Browser->UserIP.'" data-target="#acct_reset_modal" data-toggle="modal">here</a></strong>'; break;
				case 'M-0x02': return 'Welcome back, <strong>'.$this->User->UserID.'</strong>.<br>Please <strong>Log In</strong> and enjoy your stay here at <font class="b_i">'.Settings::SiteTitle().'</font>.'; break;
				# Direct Messages
                case 'DM-0x01': return 'Please enter a Character Name to send the message to.'; break;
                case 'DM-0x02': return 'Please enter a Subject for the message.'; break;
                case 'DM-0x03': return 'Please enter a Message.'; break;
			}
		}
    }
