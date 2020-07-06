<?php
#==============================================================================
# Configuration
#==============================================================================
# LDAP
$ldap_url = "ldap://ldap.xiaocoder.com:389";
$ldap_starttls = false;
$ldap_binddn = "cn=admin,dc=xiaocoder,dc=com";
$ldap_bindpw = "Xiao@2020";
$ldap_base = "dc=xiaocoder,dc=com";
$ldap_login_attribute = "cn";
$ldap_fullname_attribute = "cn";
$ldap_filter = "(&(objectClass=inetOrgPerson)($ldap_login_attribute={login}))";

# Hash mechanism for password:
# SSHA
# SHA
# SMD5
# MD5
# CRYPT
# clear (the default)
# auto (will check the hash of current password)
# This option is not used with ad_mode = true
$hash = "clear";

# Prefix to use for salt with CRYPT
$hash_options['crypt_salt_prefix'] = "$6$";

# Local password policy
# This is applied before directory password policy
# Minimal length
$pwd_min_length = 8;
# Maximal length
$pwd_max_length = 0;
# Minimal lower characters
$pwd_min_lower = 0;
# Minimal upper characters
$pwd_min_upper = 0;
# Minimal digit characters
$pwd_min_digit = 0;
# Minimal special characters
$pwd_min_special = 0;
# Definition of special characters
$pwd_special_chars = "^a-zA-Z0-9@";
# Forbidden characters
#$pwd_forbidden_chars = "@%";
# Don't reuse the same password as currently
$pwd_no_reuse = true;
# Check that password is different than login
$pwd_diff_login = true;
# Complexity: number of different class of character required
$pwd_complexity = 0;
# Show policy constraints message:
# always
# never
# onerror
$pwd_show_policy = "always";
# Position of password policy constraints message:
# above - the form
# below - the form
$pwd_show_policy_pos = "above";

# Who changes the password?
# Also applicable for question/answer save
# user: the user itself
# manager: the above binddn
$who_change_password = "user";

## Standard change
# Use standard change form?
$use_change = true;

## Questions/answers
# Use questions/answers?
# true (default)
# false
$use_questions = false;

# Answer attribute should be hidden to users!
$answer_objectClass = "user";
$answer_attribute = "info";

## Token
$use_tokens = true;
# Crypt tokens
$crypt_tokens = true;
# Token lifetime in seconds
$token_lifetime = "3600";

## Mail
# LDAP mail attribute
$mail_attribute = "mail";
# Who the email should come from
$mail_from = "1026840746@qq.com";
$mail_from_name = "SD LDAP Password Service";
# Notify users anytime their password is changed
$notify_on_change = true;
$mail_address_use_ldap = true;
# PHPMailer configuration (see https://github.com/PHPMailer/PHPMailer)
$mail_sendmailpath = '/usr/sbin/sendmail';
$mail_protocol = 'smtp';
$mail_smtp_debug = 0;
$mail_debug_format = 'html';
$mail_smtp_host = 'smtp.qq.com';
$mail_smtp_auth = true;
$mail_smtp_user = '1026840746@qq.com';
$mail_smtp_pass = 'gWE2noVAojWkFVcA';
$mail_smtp_port = 465;
$mail_smtp_timeout = 30;
$mail_smtp_keepalive = false;
$mail_smtp_secure = 'tls';
$mail_contenttype = 'text/plain';
$mail_charset = 'utf-8';
$mail_priority = 3;
$mail_newline = PHP_EOL;

# Display help messages
$show_help = true;

# Language
$lang ="zh-CN";

# Display menu on top
$show_menu = true;

# Logo
$logo = "images/ltb-logo.png";

# Background image
$background_image = "images/unsplash-space.jpeg";

# Debug mode
$debug = false;

# Encryption, decryption keyphrase
$keyphrase = "SD";

# Invalid characters in login
# Set at least "*()&|" to prevent LDAP injection
# If empty, only alphanumeric characters are accepted
$login_forbidden_chars = "*()&|";

## Default action
# change
# sendtoken
# sendsms
$default_action = "change";

## Extra messages
$messages['changehelpextramessage'] = ">>帐户被锁定请使用导航栏中的其他方式解锁账户并重置密码。<br />通过邮件发送链接：请确认您已联系管理员设置邮箱。";
$obscure_failure_messages = array("mailnomatch");
?>
