<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-20 07:40:17 --> 404 Page Not Found: Emloyee_mobile/index
ERROR - 2020-11-20 07:42:18 --> 404 Page Not Found: Emloyee_mobile/index
ERROR - 2020-11-20 07:53:21 --> Severity: error --> Exception: Unable to locate the model you have specified: Dashboard_modal E:\xampp\htdocs\sigmatooling_new\system\core\Loader.php 348
ERROR - 2020-11-20 07:54:30 --> Severity: Notice --> Undefined property: stdClass::$User_Name E:\xampp\htdocs\sigmatooling_new\application\controllers\mobile\Dashboard.php 18
ERROR - 2020-11-20 07:57:18 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) E:\xampp\htdocs\sigmatooling_new\application\controllers\mobile\Dashboard.php 18
ERROR - 2020-11-20 08:24:37 --> Query error: Table 'u546352023_new_sigma.pms_master' doesn't exist - Invalid query: SELECT *
FROM `pms_master`
JOIN `department` ON `department`.`Department_Id` = `pms_master`.`Department_Id`
ERROR - 2020-11-20 08:26:47 --> Query error: Table 'u546352023_new_sigma.employee_pms_worker' doesn't exist - Invalid query: SELECT `x`.`Employee_Firstname` as `xx`, `x`.`Employee_Lastname` as `yy`, `b`.`Employee_Pms_Id`, `c`.`Employee_Firstname` as `c_f`, `c`.`Employee_Lastname` as `c_l`, `d`.`Employee_Firstname` as `p_f`, `d`.`Employee_Lastname` as `p_l`, `e`.`Employee_Firstname` as `h_f`, `e`.`Employee_Lastname` as `h_l`
FROM `employee_pms_worker` `b`
JOIN `employee` `x` ON `x`.`Employee_Id` = `b`.`Employee_Id`
JOIN `employee` `c` ON `b`.`Cell_Incharge_Id` = `c`.`Employee_Id`
JOIN `employee` `d` ON `b`.`ppc_manager_id` = `d`.`Employee_Id`
JOIN `employee` `e` ON `b`.`hr_incharge_id` = `e`.`Employee_Id`
ERROR - 2020-11-20 08:38:53 --> 404 Page Not Found: Hr_gate_pass/index
ERROR - 2020-11-20 08:39:08 --> 404 Page Not Found: Hr_packing_report/index
ERROR - 2020-11-20 09:10:47 --> Severity: Notice --> Undefined offset: 1 /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/controllers/mobile/Login.php 17
ERROR - 2020-11-20 09:18:36 --> Severity: Notice --> Undefined offset: 1 /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/controllers/mobile/Login.php 17
ERROR - 2020-11-20 09:28:22 --> Severity: error --> Exception: Call to undefined method stdClass::result() /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/models/mobile_model/Dashboard_modal.php 24
ERROR - 2020-11-20 09:39:25 --> Severity: Notice --> Undefined property: stdClass::$User_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/controllers/hr/Dashboard.php 18
ERROR - 2020-11-20 09:39:33 --> Severity: Notice --> Undefined property: stdClass::$User_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/controllers/hr/Dashboard.php 18
ERROR - 2020-11-20 09:41:15 --> Severity: Notice --> Undefined offset: 1 /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/controllers/mobile/Login.php 17
ERROR - 2020-11-20 10:36:57 --> 404 Page Not Found: Hr_packing_report/index
ERROR - 2020-11-20 10:41:10 --> Severity: Notice --> Undefined offset: 1 /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/controllers/mobile/Login.php 17
ERROR - 2020-11-20 11:21:45 --> 404 Page Not Found: Hr_packing_report/index
ERROR - 2020-11-20 11:24:43 --> 404 Page Not Found: hr/pms/Employee_pms_behaviour/set_working
ERROR - 2020-11-20 14:09:20 --> 404 Page Not Found: Hr_gate_pass/index
ERROR - 2020-11-20 14:16:35 --> 404 Page Not Found: Hr_gate_pass/index
ERROR - 2020-11-20 14:16:43 --> 404 Page Not Found: Hr_gate_pass/index
ERROR - 2020-11-20 14:17:45 --> Query error: Table 'u546352023_new_sigma.gate_pass' doesn't exist - Invalid query: SELECT *
FROM `gate_pass`
JOIN `employee` ON `gate_pass`.`Employee_Id` = `employee`.`Employee_Id`
ORDER BY `Gate_Pass_Id` DESC
ERROR - 2020-11-20 14:18:45 --> 404 Page Not Found: Hr_gate_pass/index
ERROR - 2020-11-20 14:18:48 --> 404 Page Not Found: Hr_gate_pass/index
ERROR - 2020-11-20 14:18:48 --> 404 Page Not Found: Hr_gate_pass/index
ERROR - 2020-11-20 14:19:33 --> 404 Page Not Found: Hr_gate_pass_save/index
ERROR - 2020-11-20 14:21:50 --> 404 Page Not Found: Hr_gate_pass_save/index
ERROR - 2020-11-20 14:22:04 --> 404 Page Not Found: Hr_gate_pass/index
ERROR - 2020-11-20 14:22:23 --> 404 Page Not Found: Hr_gate_pass/index
ERROR - 2020-11-20 14:22:32 --> 404 Page Not Found: Hr_gate_pass/index
ERROR - 2020-11-20 14:24:19 --> 404 Page Not Found: Hr_gate_pass_update/index
ERROR - 2020-11-20 14:28:27 --> 404 Page Not Found: Hr_gate_pass_get_pass/index
ERROR - 2020-11-20 14:28:35 --> 404 Page Not Found: Hr_gate_pass_get_pass/index
ERROR - 2020-11-20 14:28:37 --> 404 Page Not Found: Hr_gate_pass_get_pass/index
ERROR - 2020-11-20 14:30:39 --> 404 Page Not Found: Hr_gate_pass_get_pass/index
ERROR - 2020-11-20 14:32:35 --> 404 Page Not Found: Hr_training_master/index
ERROR - 2020-11-20 14:33:07 --> 404 Page Not Found: Hr_packing_report/index
ERROR - 2020-11-20 14:33:52 --> 404 Page Not Found: Hr_profile_view/index
ERROR - 2020-11-20 14:34:18 --> Severity: Notice --> Undefined property: stdClass::$Pms_Master_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/hr_view/employee_pms_allotment/employee_pms_allotment_page.php 25
ERROR - 2020-11-20 14:34:18 --> Severity: Notice --> Undefined property: stdClass::$Pms_Master_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/hr_view/employee_pms_allotment/employee_pms_allotment_page.php 25
ERROR - 2020-11-20 14:34:18 --> Severity: Notice --> Undefined property: stdClass::$Pms_Master_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/hr_view/employee_pms_allotment/employee_pms_allotment_page.php 25
ERROR - 2020-11-20 14:34:18 --> Severity: Notice --> Undefined property: stdClass::$Pms_Master_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/hr_view/employee_pms_allotment/employee_pms_allotment_page.php 25
ERROR - 2020-11-20 14:34:18 --> Severity: Notice --> Undefined property: stdClass::$Pms_Master_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/hr_view/employee_pms_allotment/employee_pms_allotment_page.php 25
ERROR - 2020-11-20 14:34:18 --> Severity: Notice --> Undefined property: stdClass::$Pms_Master_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/hr_view/employee_pms_allotment/employee_pms_allotment_page.php 25
ERROR - 2020-11-20 14:34:18 --> Severity: Notice --> Undefined property: stdClass::$Pms_Master_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/hr_view/employee_pms_allotment/employee_pms_allotment_page.php 25
ERROR - 2020-11-20 14:34:18 --> Severity: Notice --> Undefined property: stdClass::$Pms_Master_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/hr_view/employee_pms_allotment/employee_pms_allotment_page.php 25
ERROR - 2020-11-20 14:34:18 --> Severity: Notice --> Undefined property: stdClass::$Pms_Master_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/hr_view/employee_pms_allotment/employee_pms_allotment_page.php 25
ERROR - 2020-11-20 14:37:58 --> 404 Page Not Found: Hr_employee_pms_report/index
ERROR - 2020-11-20 14:40:16 --> 404 Page Not Found: hr/pms/Employee_pms_behaviour/set_working
ERROR - 2020-11-20 14:41:35 --> 404 Page Not Found: Hr_packing_report/index
ERROR - 2020-11-20 14:43:02 --> Severity: Notice --> Undefined property: stdClass::$Pms_Master_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/hr_view/employee_pms_allotment/employee_pms_allotment_page.php 25
ERROR - 2020-11-20 14:43:02 --> Severity: Notice --> Undefined property: stdClass::$Pms_Master_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/hr_view/employee_pms_allotment/employee_pms_allotment_page.php 25
ERROR - 2020-11-20 14:43:02 --> Severity: Notice --> Undefined property: stdClass::$Pms_Master_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/hr_view/employee_pms_allotment/employee_pms_allotment_page.php 25
ERROR - 2020-11-20 14:43:02 --> Severity: Notice --> Undefined property: stdClass::$Pms_Master_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/hr_view/employee_pms_allotment/employee_pms_allotment_page.php 25
ERROR - 2020-11-20 14:43:02 --> Severity: Notice --> Undefined property: stdClass::$Pms_Master_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/hr_view/employee_pms_allotment/employee_pms_allotment_page.php 25
ERROR - 2020-11-20 14:43:02 --> Severity: Notice --> Undefined property: stdClass::$Pms_Master_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/hr_view/employee_pms_allotment/employee_pms_allotment_page.php 25
ERROR - 2020-11-20 14:43:02 --> Severity: Notice --> Undefined property: stdClass::$Pms_Master_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/hr_view/employee_pms_allotment/employee_pms_allotment_page.php 25
ERROR - 2020-11-20 14:43:02 --> Severity: Notice --> Undefined property: stdClass::$Pms_Master_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/hr_view/employee_pms_allotment/employee_pms_allotment_page.php 25
ERROR - 2020-11-20 14:43:02 --> Severity: Notice --> Undefined property: stdClass::$Pms_Master_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/hr_view/employee_pms_allotment/employee_pms_allotment_page.php 25
ERROR - 2020-11-20 15:30:56 --> Severity: Notice --> Undefined property: stdClass::$User_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/controllers/hr/Dashboard.php 18
ERROR - 2020-11-20 15:45:33 --> Query error: Unknown column 'Emloyee_Id' in 'where clause' - Invalid query: SELECT *
FROM `gate_pass`
WHERE `Emloyee_Id` = '1'
AND `Gate_Pass_Status` = '1'
ERROR - 2020-11-20 15:45:36 --> Query error: Unknown column 'Emloyee_Id' in 'where clause' - Invalid query: SELECT *
FROM `gate_pass`
WHERE `Emloyee_Id` = '1'
AND `Gate_Pass_Status` = '1'
ERROR - 2020-11-20 15:45:46 --> Query error: Unknown column 'Emloyee_Id' in 'where clause' - Invalid query: SELECT *
FROM `gate_pass`
WHERE `Emloyee_Id` = '1'
AND `Gate_Pass_Status` = '1'
ERROR - 2020-11-20 15:47:52 --> Severity: Notice --> Undefined offset: 1 /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/controllers/mobile/Login.php 17
ERROR - 2020-11-20 15:47:52 --> Severity: Notice --> Undefined offset: 1 /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/controllers/mobile/Login.php 17
ERROR - 2020-11-20 15:47:52 --> Severity: Notice --> Undefined offset: 1 /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/controllers/mobile/Login.php 17
ERROR - 2020-11-20 15:49:11 --> 404 Page Not Found: Employee_login/index
ERROR - 2020-11-20 15:55:21 --> Severity: Notice --> Undefined property: stdClass::$User_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/controllers/hr/security/Gatepass.php 18
ERROR - 2020-11-20 15:55:27 --> Severity: Notice --> Undefined property: stdClass::$User_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/controllers/hr/security/Gatepass.php 18
ERROR - 2020-11-20 15:55:56 --> Severity: Notice --> Undefined property: stdClass::$User_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/controllers/hr/security/Gatepass.php 18
ERROR - 2020-11-20 15:55:59 --> Severity: Notice --> Undefined property: stdClass::$User_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/controllers/hr/Dashboard.php 18
ERROR - 2020-11-20 16:13:28 --> Severity: Notice --> Undefined property: stdClass::$User_Name /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/controllers/hr/Dashboard.php 18
ERROR - 2020-11-20 16:30:38 --> Severity: Notice --> Undefined variable: leave_employee /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/mobile_view/visitor_page.php 79
ERROR - 2020-11-20 16:30:38 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/mobile_view/visitor_page.php 79
ERROR - 2020-11-20 16:30:56 --> Severity: Notice --> Undefined property: stdClass::$Employee_Firstname /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/mobile_view/visitor_page.php 33
ERROR - 2020-11-20 16:30:56 --> Severity: Notice --> Undefined property: stdClass::$Employee_Lastname /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/mobile_view/visitor_page.php 33
ERROR - 2020-11-20 16:30:56 --> Severity: Notice --> Undefined variable: leave_employee /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/mobile_view/visitor_page.php 79
ERROR - 2020-11-20 16:30:56 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/mobile_view/visitor_page.php 79
ERROR - 2020-11-20 16:31:42 --> Severity: Notice --> Undefined variable: leave_employee /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/mobile_view/visitor_page.php 79
ERROR - 2020-11-20 16:31:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/mobile_view/visitor_page.php 79
ERROR - 2020-11-20 16:31:50 --> Severity: Notice --> Undefined variable: leave_employee /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/mobile_view/visitor_page.php 79
ERROR - 2020-11-20 16:31:50 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/mobile_view/visitor_page.php 79
ERROR - 2020-11-20 16:33:07 --> Severity: Notice --> Undefined variable: leave_employee /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/mobile_view/visitor_page.php 79
ERROR - 2020-11-20 16:33:07 --> Severity: Warning --> Invalid argument supplied for foreach() /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/views/mobile_view/visitor_page.php 79
ERROR - 2020-11-20 16:41:28 --> 404 Page Not Found: mobile/Visitor/check_acknowledge
ERROR - 2020-11-20 16:44:57 --> 404 Page Not Found: mobile/Visitor/check_acknowledge
ERROR - 2020-11-20 16:45:35 --> 404 Page Not Found: mobile/Visitor/check_acknowledge
ERROR - 2020-11-20 16:45:48 --> Severity: error --> Exception: syntax error, unexpected '(' /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/application/controllers/mobile/Visitor.php 26
ERROR - 2020-11-20 17:04:43 --> Severity: error --> Exception: Unable to locate the model you have specified: Traningmodel /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/system/core/Loader.php 348
ERROR - 2020-11-20 17:05:27 --> Query error: Table 'u546352023_new_sigma.training_master' doesn't exist - Invalid query: SELECT *
FROM `training_master`
ERROR - 2020-11-20 17:06:08 --> Query error: Table 'u546352023_new_sigma.training_master' doesn't exist - Invalid query: SELECT *
FROM `training_master`
ERROR - 2020-11-20 17:06:10 --> Query error: Table 'u546352023_new_sigma.training_master' doesn't exist - Invalid query: SELECT *
FROM `training_master`
ERROR - 2020-11-20 17:06:13 --> Query error: Table 'u546352023_new_sigma.training_master' doesn't exist - Invalid query: SELECT *
FROM `training_master`
ERROR - 2020-11-20 17:06:26 --> Query error: Table 'u546352023_new_sigma.training_master' doesn't exist - Invalid query: SELECT *
FROM `training_master`
ERROR - 2020-11-20 17:12:10 --> 404 Page Not Found: Hr_training_master_add_form/index
ERROR - 2020-11-20 17:12:35 --> 404 Page Not Found: Hr_training_master_add_form/index
ERROR - 2020-11-20 17:12:37 --> 404 Page Not Found: Hr_training_master_add_form/index
ERROR - 2020-11-20 17:12:40 --> 404 Page Not Found: Hr_training_master_add_form/index
ERROR - 2020-11-20 17:15:22 --> 404 Page Not Found: Hr_training_master_save/index
ERROR - 2020-11-20 17:15:24 --> 404 Page Not Found: Hr_training_master_save/index
ERROR - 2020-11-20 17:15:25 --> 404 Page Not Found: Hr_training_master_save/index
ERROR - 2020-11-20 17:15:25 --> 404 Page Not Found: Hr_training_master_save/index
ERROR - 2020-11-20 17:15:25 --> 404 Page Not Found: Hr_training_master_save/index
ERROR - 2020-11-20 17:15:46 --> 404 Page Not Found: Hr_training_master_save/index
ERROR - 2020-11-20 17:15:47 --> 404 Page Not Found: Hr_training_master_save/index
ERROR - 2020-11-20 17:15:47 --> 404 Page Not Found: Hr_training_master_save/index
ERROR - 2020-11-20 17:17:12 --> 404 Page Not Found: Hr_controller/training
ERROR - 2020-11-20 17:17:16 --> 404 Page Not Found: Hr_controller/training
ERROR - 2020-11-20 17:17:58 --> 404 Page Not Found: Hr_controller/training
ERROR - 2020-11-20 17:18:00 --> 404 Page Not Found: Hr_controller/training
ERROR - 2020-11-20 17:19:56 --> Severity: error --> Exception: Unable to locate the model you have specified: Traningmodel /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/system/core/Loader.php 348
ERROR - 2020-11-20 17:20:11 --> Severity: error --> Exception: Unable to locate the model you have specified: Traningmodel /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/system/core/Loader.php 348
ERROR - 2020-11-20 17:21:19 --> Severity: error --> Exception: Unable to locate the model you have specified: Traningmodel /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/system/core/Loader.php 348
ERROR - 2020-11-20 17:23:58 --> Severity: error --> Exception: Unable to locate the model you have specified: Traningmodel /home/u546352023/domains/electroinfosoft.com/public_html/sigmaproject/system/core/Loader.php 348
ERROR - 2020-11-20 17:24:49 --> Query error: Table 'u546352023_new_sigma.employee_training' doesn't exist - Invalid query: SELECT *
FROM `employee_training`
INNER JOIN `employee` ON `employee_training`.`Employee_Id` = `employee`.`Employee_Id`
WHERE `Employee_Training_Module` = '1'
ERROR - 2020-11-20 18:38:11 --> Query error: Table 'sigma_14_11_2020.training_master' doesn't exist - Invalid query: SELECT *
FROM `training_master`
ERROR - 2020-11-20 19:08:46 --> Query error: Table 'sigma_14_11_2020.employee_training' doesn't exist - Invalid query: SELECT *
FROM `employee_training`
INNER JOIN `employee` ON `employee_training`.`Employee_Id` = `employee`.`Employee_Id`
WHERE `Employee_Training_Module` = '1'
ERROR - 2020-11-20 19:09:29 --> Query error: Table 'sigma_14_11_2020.employee_training' doesn't exist - Invalid query: SELECT *
FROM `employee_training`
INNER JOIN `employee` ON `employee_training`.`Employee_Id` = `employee`.`Employee_Id`
WHERE `Employee_Training_Module` = '1'
ERROR - 2020-11-20 19:23:51 --> 404 Page Not Found: Hr_vacancy/index
ERROR - 2020-11-20 19:25:22 --> 404 Page Not Found: Hr_format_list/index
ERROR - 2020-11-20 19:29:21 --> 404 Page Not Found: hr/Formatsmaster/index
ERROR - 2020-11-20 19:29:27 --> 404 Page Not Found: hr/Formatsmaster/index
ERROR - 2020-11-20 19:30:21 --> Severity: Notice --> Undefined variable: Username E:\xampp\htdocs\sigmatooling_new\application\views\hr_view\sidemenu.php 9
ERROR - 2020-11-20 19:30:21 --> Query error: Table 'sigma_14_11_2020.format_master' doesn't exist - Invalid query: SELECT *
FROM `format_master`
ERROR - 2020-11-20 19:32:46 --> Severity: Notice --> Undefined variable: Username E:\xampp\htdocs\sigmatooling_new\application\views\hr_view\sidemenu.php 9
ERROR - 2020-11-20 19:34:54 --> 404 Page Not Found: Assets/formats
ERROR - 2020-11-20 19:35:48 --> 404 Page Not Found: Hr_jd_list/index
ERROR - 2020-11-20 19:37:44 --> Severity: Notice --> Undefined variable: Username E:\xampp\htdocs\sigmatooling_new\application\views\hr_view\sidemenu.php 9
ERROR - 2020-11-20 19:37:44 --> Query error: Table 'sigma_14_11_2020.job_description' doesn't exist - Invalid query: SELECT *
FROM `job_description`
JOIN `department` ON `department`.`Department_Id` = `job_description`.`Job_Description_Department`
JOIN `designation` ON `designation`.`Designation_Id` = `job_description`.`Job_Description_Designation`
ERROR - 2020-11-20 19:38:27 --> Severity: Notice --> Undefined variable: Username E:\xampp\htdocs\sigmatooling_new\application\views\hr_view\sidemenu.php 9
ERROR - 2020-11-20 19:43:25 --> Severity: Notice --> Undefined variable: Username E:\xampp\htdocs\sigmatooling_new\application\views\hr_view\sidemenu.php 9
ERROR - 2020-11-20 19:45:56 --> 404 Page Not Found: Hr_leave_master/index
ERROR - 2020-11-20 19:48:53 --> Query error: Table 'sigma_14_11_2020.leave_policy' doesn't exist - Invalid query: SELECT *
FROM `leave_policy`
ERROR - 2020-11-20 19:51:25 --> 404 Page Not Found: Hr_policy_list/index
ERROR - 2020-11-20 19:53:57 --> Severity: Notice --> Undefined variable: Username E:\xampp\htdocs\sigmatooling_new\application\views\hr_view\sidemenu.php 9
ERROR - 2020-11-20 19:53:57 --> Query error: Table 'sigma_14_11_2020.policy_master' doesn't exist - Invalid query: SELECT *
FROM `policy_master`
ERROR - 2020-11-20 19:54:51 --> Severity: Notice --> Undefined variable: Username E:\xampp\htdocs\sigmatooling_new\application\views\hr_view\sidemenu.php 9
ERROR - 2020-11-20 19:59:26 --> Severity: Notice --> Undefined variable: Username E:\xampp\htdocs\sigmatooling_new\application\views\hr_view\sidemenu.php 9
ERROR - 2020-11-20 20:07:31 --> Severity: error --> Exception: Unable to locate the model you have specified: Recruitmentmodel E:\xampp\htdocs\sigmatooling_new\system\core\Loader.php 348
ERROR - 2020-11-20 20:08:15 --> Query error: Table 'sigma_14_11_2020.vacancy' doesn't exist - Invalid query: SELECT *
FROM `vacancy`
JOIN `company_master` ON `vacancy`.`Company_Master_Id` = `company_master`.`Company_Master_Id`
JOIN `department` ON `vacancy`.`Department_Id` = `department`.`Department_Id`
JOIN `designation` ON `vacancy`.`Designation_Id` = `designation`.`Designation_Id`
JOIN `employee` ON `vacancy`.`Employee_Id` = `employee`.`Employee_Id`
ERROR - 2020-11-20 20:12:23 --> 404 Page Not Found: Hr_vacancy_apply/index
ERROR - 2020-11-20 20:12:54 --> 404 Page Not Found: Hr_vacancy_apply/index
ERROR - 2020-11-20 20:13:22 --> Severity: error --> Exception: Unable to locate the model you have specified: Vacancyapplymodel E:\xampp\htdocs\sigmatooling_new\system\core\Loader.php 348
ERROR - 2020-11-20 20:42:34 --> Query error: Unknown column 'vacancy_apply.Vacancy_Id' in 'where clause' - Invalid query: SELECT *
FROM `vacancy_apply` `a`
JOIN `vacancy` ON `a`.`Vacancy_Id` = `vacancy`.`Vacancy_Id`
JOIN `department` ON `a`.`Vacancy_Id` = `department`.`Department_Id`
JOIN `designation` ON `a`.`Vacancy_Id` = `designation`.`Designation_Id`
WHERE `vacancy_apply`.`Vacancy_Id` = '5'
ERROR - 2020-11-20 20:42:50 --> Severity: Notice --> Undefined property: stdClass::$Designation_Name E:\xampp\htdocs\sigmatooling_new\application\views\hr_view\vacancy_apply\vacancy_apply_list_page.php 60
ERROR - 2020-11-20 20:42:50 --> Severity: Notice --> Undefined property: stdClass::$Department_Name E:\xampp\htdocs\sigmatooling_new\application\views\hr_view\vacancy_apply\vacancy_apply_list_page.php 61
ERROR - 2020-11-20 20:42:50 --> Severity: Notice --> Undefined property: stdClass::$Designation_Name E:\xampp\htdocs\sigmatooling_new\application\views\hr_view\vacancy_apply\vacancy_apply_list_page.php 60
ERROR - 2020-11-20 20:42:50 --> Severity: Notice --> Undefined property: stdClass::$Department_Name E:\xampp\htdocs\sigmatooling_new\application\views\hr_view\vacancy_apply\vacancy_apply_list_page.php 61
ERROR - 2020-11-20 20:42:50 --> Severity: Notice --> Undefined property: stdClass::$Designation_Name E:\xampp\htdocs\sigmatooling_new\application\views\hr_view\vacancy_apply\vacancy_apply_list_page.php 60
ERROR - 2020-11-20 20:42:50 --> Severity: Notice --> Undefined property: stdClass::$Department_Name E:\xampp\htdocs\sigmatooling_new\application\views\hr_view\vacancy_apply\vacancy_apply_list_page.php 61
ERROR - 2020-11-20 21:11:41 --> Severity: error --> Exception: syntax error, unexpected end of file E:\xampp\htdocs\sigmatooling_new\application\views\hr_view\vacancy_apply\vacancy_apply_list_page.php 166
ERROR - 2020-11-20 21:16:46 --> 404 Page Not Found: Hr_resume_list/index
ERROR - 2020-11-20 21:27:58 --> Severity: Notice --> Undefined offset: 1 E:\xampp\htdocs\sigmatooling_new\application\controllers\mobile\Login.php 17
ERROR - 2020-11-20 21:28:01 --> Severity: Notice --> Undefined property: stdClass::$Employee_Firstname E:\xampp\htdocs\sigmatooling_new\application\controllers\mobile\Dashboard.php 18
ERROR - 2020-11-20 21:28:01 --> Severity: Notice --> Undefined property: stdClass::$Employee_Lastname E:\xampp\htdocs\sigmatooling_new\application\controllers\mobile\Dashboard.php 18
ERROR - 2020-11-20 21:28:01 --> Severity: Notice --> Undefined property: stdClass::$Employee_Id E:\xampp\htdocs\sigmatooling_new\application\controllers\mobile\Dashboard.php 19
ERROR - 2020-11-20 21:28:01 --> Severity: Notice --> Undefined property: stdClass::$Employee_Id E:\xampp\htdocs\sigmatooling_new\application\controllers\mobile\Dashboard.php 22
ERROR - 2020-11-20 21:28:01 --> Severity: Notice --> Trying to get property 'Employee_Leave' of non-object E:\xampp\htdocs\sigmatooling_new\application\models\mobile_model\Dashboard_modal.php 24
ERROR - 2020-11-20 21:44:24 --> Severity: error --> Exception: syntax error, unexpected '}', expecting ';' or '{' E:\xampp\htdocs\sigmatooling_new\application\models\mobile_model\Dashboard_modal.php 13
ERROR - 2020-11-20 21:44:40 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::get_company() E:\xampp\htdocs\sigmatooling_new\application\controllers\mobile\Dashboard.php 19
ERROR - 2020-11-20 21:48:03 --> 404 Page Not Found: Hr_profile_view/index
ERROR - 2020-11-20 22:19:34 --> Severity: Notice --> Undefined variable: training E:\xampp\htdocs\sigmatooling_new\application\views\mobile_view\dashboard_page.php 206
ERROR - 2020-11-20 22:19:34 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\application\views\mobile_view\dashboard_page.php 206
ERROR - 2020-11-20 22:34:05 --> Query error: Unknown column '2020-11-20' in 'where clause' - Invalid query: SELECT *
FROM `employee_training` `a`
JOIN `training_master` `b` ON `b`.`Training_Master_Id` = `a`.`Employee_Training_Module`
WHERE `Employee_Id` = '147'
AND `Training_Date` > `2020-11-20`
ERROR - 2020-11-20 22:54:22 --> 404 Page Not Found: Training/Trainingaddmembers
ERROR - 2020-11-20 22:55:08 --> 404 Page Not Found: Training/Trainingaddmembers
ERROR - 2020-11-20 22:55:30 --> 404 Page Not Found: Training/Trainingaddmembers
ERROR - 2020-11-20 23:17:41 --> 404 Page Not Found: Training/Trainingaddmembers
ERROR - 2020-11-20 23:17:53 --> 404 Page Not Found: Training/Trainingaddmembers
ERROR - 2020-11-20 23:28:01 --> Severity: error --> Exception: Call to undefined method Traningmodel::insert_attendance_training() E:\xampp\htdocs\sigmatooling_new\application\controllers\hr\training\Trainingaddmembers.php 151
ERROR - 2020-11-20 23:28:32 --> Severity: error --> Exception: Call to undefined method Traningmodel::insert_attendance_training() E:\xampp\htdocs\sigmatooling_new\application\controllers\hr\training\Trainingaddmembers.php 151
ERROR - 2020-11-20 23:29:04 --> Severity: error --> Exception: Call to undefined method Traningmodel::insert_attendance_training() E:\xampp\htdocs\sigmatooling_new\application\controllers\hr\training\Trainingaddmembers.php 151
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1566
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> sort() expects parameter 1 to be array, null given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1567
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1595
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1566
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> sort() expects parameter 1 to be array, null given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1567
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:29:38 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1595
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1566
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> sort() expects parameter 1 to be array, null given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1567
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1595
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1566
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> sort() expects parameter 1 to be array, null given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1567
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:29:39 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1595
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1566
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> sort() expects parameter 1 to be array, null given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1567
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1595
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1566
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> sort() expects parameter 1 to be array, null given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1567
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:30:39 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1595
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1566
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> sort() expects parameter 1 to be array, null given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1567
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1595
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1566
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> sort() expects parameter 1 to be array, null given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1567
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:30:40 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1595
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1566
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> sort() expects parameter 1 to be array, null given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1567
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1595
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1566
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> sort() expects parameter 1 to be array, null given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1567
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:36:52 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1595
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1566
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> sort() expects parameter 1 to be array, null given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1567
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1595
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1566
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> sort() expects parameter 1 to be array, null given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1567
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> array_diff(): Argument #1 is not an array E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1572
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1579
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1584
ERROR - 2020-11-20 23:36:53 --> Severity: Warning --> Invalid argument supplied for foreach() E:\xampp\htdocs\sigmatooling_new\system\database\DB_query_builder.php 1595
