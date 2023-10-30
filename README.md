# menstruation
# HTML+PHP 记录女友月经周期

**样式代码来源网络，如有侵权私删！**
_在原基础上进行以下修改：_
 1. 新增表单用于数据输入
 2. 增加 **月经周期自动计算** ，你可以直接输入本次月经的时间，自动算出与上一次月经的间隔天数
 3. 增加 **弹窗控件** ；
 4. 增加 **异常周期计算** ；
 5. 增加 **平均周期计算** ；
 6. 增加 **动态计算** 等功能
 7. 优化界面UI，兼容移动端

sql数据库快速创建表命令：
```sql
CREATE TABLE timeline_data (
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    cycle_days INT(11) NOT NULL,
    period_days INT(11) NOT NULL,
    fight_count INT(11) NOT NULL,
    health_status VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    current_period_date DATE
);
```
# 这个 SQL 命令会创建一个名为 timeline_data 的表，具有以下列：  
1.id：一个自增的整数列，用作主键。  
2.cycle_days：一个整数列，用来存储月经周期的天数。  
3.period_days：一个整数列，用来存储行径时间的天数。  
4.fight_count：一个整数列，用来存储吵架次数。  
5.health_status：一个 VARCHAR 类型的列，用来存储身体状况。  
6.created_at：一个 TIMESTAMP 类型的列，用来存储数据创建的时间。默认值设置为当前时间戳。  
7.current_period_date：一个 DATE 类型的列，用来存储当前月经日期。  # menstruation

# 演示
点击转到[测试](https://keeleycenc.com/Mygithub/menstruation/index.html)  
点击转到[正式](https://keeleycenc.com/Brave-main/Typecho/index.php/6.html)
