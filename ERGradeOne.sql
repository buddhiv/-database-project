CREATE TABLE Applicant (applicant_id int(10) NOT NULL, name_in_full varchar(255) NOT NULL, name_with_initials varchar(255) NOT NULL, nic varchar(15) NOT NULL, religion varchar(31) NOT NULL, address varchar(255) NOT NULL, is_sri_lankan tinyint NOT NULL, district varchar(31) NOT NULL, divisional_sec_area varchar(63) NOT NULL, grama_niladari_divi varchar(63) NOT NULL, telephone varchar(15), PRIMARY KEY (applicant_id));
CREATE TABLE Child (child_id int(10) NOT NULL, name_in_full varchar(255), name_with_initials varchar(255), date_of_birth date, religion varchar(31), sex varchar(7), address varchar(255), medium varchar(15) NOT NULL, Applicantapplicant_id int(10) NOT NULL, Location_infolocation_info_id int(10) NOT NULL, Methodmethod_id int(10) NOT NULL, PRIMARY KEY (child_id));
CREATE TABLE School (school_id int(10) NOT NULL, name varchar(255) NOT NULL, address varchar(255), district varchar(31), divisional_sec_area varchar(63), telephone varchar(15), category varchar(31) NOT NULL, is_rural int(10), PRIMARY KEY (school_id));
CREATE TABLE School_Child (Schoolschool_id int(10) NOT NULL, Childchild_id int(10) NOT NULL, distance double NOT NULL, priority int(10) NOT NULL, PRIMARY KEY (Schoolschool_id, Childchild_id));
CREATE TABLE Resident_method (resident_id int(10) NOT NULL, num_of_years_spent int(10), ownership varchar(127) NOT NULL, num_of_closes_schools int(10), confirm tinyint);
CREATE TABLE Student (student_id int(10) NOT NULL AUTO_INCREMENT, number int(10), name_in_full varchar(63) NOT NULL, address varchar(255) NOT NULL, PRIMARY KEY (student_id));
CREATE TABLE Student_School (Studentstudent_id int(10) NOT NULL, Schoolschool_id int(10) NOT NULL, registered_date date, leaving_date date, is_old_boy tinyint NOT NULL, starting_grade int(10), `Column` int(10), PRIMARY KEY (Studentstudent_id, Schoolschool_id));
CREATE TABLE Achievement (achievement_id int(10) NOT NULL AUTO_INCREMENT, year date, Student_SchoolStudentstudent_id int(10) NOT NULL, Student_SchoolSchoolschool_id int(10) NOT NULL, PRIMARY KEY (achievement_id));
CREATE TABLE Acadamic (acadamic_id int(10), exam varchar(255), subject varchar(31), result varchar(7) NOT NULL);
CREATE TABLE `Non Acadamic` (non_acadamic_id int(10), `case` varchar(255), place int(10));
CREATE TABLE Teacher (teacher_id int(10) NOT NULL AUTO_INCREMENT, subject varchar(255) NOT NULL, address varchar(255) NOT NULL, name_in_full varchar(255), telephone int(10) NOT NULL, PRIMARY KEY (teacher_id));
CREATE TABLE Teacher_School (Teacherteacher_id int(10) NOT NULL, Schoolschool_id int(10) NOT NULL, start_of_working_date date NOT NULL, leaving_date date NOT NULL, distance_from_permanent_residence int(10) NOT NULL, PRIMARY KEY (Teacherteacher_id, Schoolschool_id));
CREATE TABLE Method (method_id int(10) NOT NULL AUTO_INCREMENT, PRIMARY KEY (method_id));
CREATE TABLE Present_pupil_method (Studentstudent_id int(10) NOT NULL);
CREATE TABLE Past_pupil_method (Studentstudent_id int(10) NOT NULL);
CREATE TABLE Staff_method (Teacherteacher_id int(10) NOT NULL);
CREATE TABLE Location_duration_info (location_id int(10) NOT NULL AUTO_INCREMENT, year date, grama_div varchar(255), polling_div varchar(255), polling_district varchar(255), Childchild_id int(10) NOT NULL, confirm tinyint, PRIMARY KEY (location_id));
CREATE TABLE Marks (mark_id int(10) NOT NULL AUTO_INCREMENT, `case` int(10), marks int(10), Childchild_id int(10) NOT NULL, PRIMARY KEY (mark_id));
ALTER TABLE Child ADD INDEX has (Applicantapplicant_id), ADD CONSTRAINT has FOREIGN KEY (Applicantapplicant_id) REFERENCES Applicant (applicant_id);
ALTER TABLE School_Child ADD INDEX FKSchool_Chi805148 (Childchild_id), ADD CONSTRAINT FKSchool_Chi805148 FOREIGN KEY (Childchild_id) REFERENCES Child (child_id);
ALTER TABLE School_Child ADD INDEX FKSchool_Chi426422 (Schoolschool_id), ADD CONSTRAINT FKSchool_Chi426422 FOREIGN KEY (Schoolschool_id) REFERENCES School (school_id);
ALTER TABLE Student_School ADD INDEX FKStudent_Sc753998 (Studentstudent_id), ADD CONSTRAINT FKStudent_Sc753998 FOREIGN KEY (Studentstudent_id) REFERENCES Student (student_id);
ALTER TABLE Student_School ADD INDEX FKStudent_Sc241997 (Schoolschool_id), ADD CONSTRAINT FKStudent_Sc241997 FOREIGN KEY (Schoolschool_id) REFERENCES School (school_id);
ALTER TABLE Achievement ADD INDEX get (Student_SchoolStudentstudent_id, Student_SchoolSchoolschool_id), ADD CONSTRAINT get FOREIGN KEY (Student_SchoolStudentstudent_id, Student_SchoolSchoolschool_id) REFERENCES Student_School (Studentstudent_id, Schoolschool_id);
ALTER TABLE Teacher_School ADD INDEX FKTeacher_Sc884864 (Teacherteacher_id), ADD CONSTRAINT FKTeacher_Sc884864 FOREIGN KEY (Teacherteacher_id) REFERENCES Teacher (teacher_id);
ALTER TABLE Teacher_School ADD INDEX FKTeacher_Sc916622 (Schoolschool_id), ADD CONSTRAINT FKTeacher_Sc916622 FOREIGN KEY (Schoolschool_id) REFERENCES School (school_id);
ALTER TABLE Child ADD INDEX applying_on (Methodmethod_id), ADD CONSTRAINT applying_on FOREIGN KEY (Methodmethod_id) REFERENCES Method (method_id);
ALTER TABLE Location_duration_info ADD INDEX at (Childchild_id), ADD CONSTRAINT at FOREIGN KEY (Childchild_id) REFERENCES Child (child_id);
ALTER TABLE Marks ADD INDEX graded_with (Childchild_id), ADD CONSTRAINT graded_with FOREIGN KEY (Childchild_id) REFERENCES Child (child_id);
ALTER TABLE Present_pupil_method ADD INDEX assign_present_pupil (Studentstudent_id), ADD CONSTRAINT assign_present_pupil FOREIGN KEY (Studentstudent_id) REFERENCES Student (student_id);
ALTER TABLE Past_pupil_method ADD INDEX assign_past_pupil (Studentstudent_id), ADD CONSTRAINT assign_past_pupil FOREIGN KEY (Studentstudent_id) REFERENCES Student (student_id);
ALTER TABLE Staff_method ADD INDEX assign_teacher (Teacherteacher_id), ADD CONSTRAINT assign_teacher FOREIGN KEY (Teacherteacher_id) REFERENCES Teacher (teacher_id);
