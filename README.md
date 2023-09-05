# menstruation
# HTML+PHP 记录女友月经周期

sql数据库快速创建表命令：
`CREATE TABLE timeline_data (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cycle_days INT(11) NOT NULL,
    period_days INT(11) NOT NULL,
    fight_count INT(11) NOT NULL,
    health_status VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    current_period_date DATE
);
`    
# 这个 SQL 命令会创建一个名为 timeline_data 的表，具有以下列：  
1.id：一个自增的整数列，用作主键。  
2.cycle_days：一个整数列，用来存储月经周期的天数。  
3.period_days：一个整数列，用来存储行径时间的天数。  
4.fight_count：一个整数列，用来存储吵架次数。  
5.health_status：一个 VARCHAR 类型的列，用来存储身体状况。  
6.created_at：一个 TIMESTAMP 类型的列，用来存储数据创建的时间。默认值设置为当前时间戳。  
7.current_period_date：一个 DATE 类型的列，用来存储当前月经日期。  # menstruation
