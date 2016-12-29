CREATE TABLE users (
  id        INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username  VARCHAR(255) UNIQUE,
  password  VARCHAR(32)
);

CREATE TABLE flag (
  flag  VARCHAR(255)
);

CREATE TABLE articles (
  id        INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_id    INT NOT NULL,
  title      VARCHAR(255),
  body       TEXT,
  created_at DATE
);

INSERT INTO users VALUES (1, 'test',  'test');
INSERT INTO flag VALUES ('mzrctf{sotsuron_ga_yabai!}');
INSERT INTO articles VALUES (1, 1, 'CVE-2016-0476', 'Oracle Application Testing Suite DownloadServlet reportName Parameter Directory Traversal Information Disclosure Vulnerability', '2015-12-09');
INSERT INTO articles VALUES (2, 1, 'CVE-2016-0477', 'Oracle Application Testing Suite DownloadServlet Multiple Parameter Directory Traversal Information Disclosure Vulnerability', '2015-12-09');
INSERT INTO articles VALUES (3, 1, 'CVE-2016-0480', 'Oracle Application Testing Suite DownloadServlet reportName Parameter Directory Traversal Information Disclosure Vulnerability', '2015-12-09');
INSERT INTO articles VALUES (4, 1, 'CVE-2016-0481', 'Oracle Application Testing Suite DownloadServlet reportName Parameter Directory Traversal Information Disclosure Vulnerability', '2015-12-09');
INSERT INTO articles VALUES (5, 1, 'CVE-2016-0485', 'Oracle Application Testing Suite DownloadServlet reportName Parameter Directory Traversal Information Disclosure Vulnerability', '2015-12-09');
INSERT INTO articles VALUES (6, 1, 'CVE-2016-0486', 'Oracle Application Testing Suite DownloadServlet exportFileName Parameter Directory Traversal Information Disclosure Vulnerability', '2015-12-09');
INSERT INTO articles VALUES (7, 1, 'CVE-2016-0489', 'Oracle Application Testing Suite ReportImage tempfilename Parameter Directory Traversal Remote Code Execution Vulnerability', '2015-12-09');
INSERT INTO articles VALUES (8, 1, 'CVE-2016-0490', 'Oracle Application Testing Suite filename Header Remote Code Execution Vulnerability', '2015-12-09');
INSERT INTO articles VALUES (9, 1, 'CVE-2016-0491', 'Oracle Application Testing Suite UploadFileAction Servlet Remote Code Execution Vulnerability', '2015-12-09');
INSERT INTO articles VALUES (10, 1, 'CVE-2016-0492', 'Oracle Application Testing Suite Authentication Bypass Vulnerability', '2015-12-09');
