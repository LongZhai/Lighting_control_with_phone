# Lighting_control_with_phone


Home Automation (lighting control)

Materials: Raspberry Pi or Arduino;
        Power extension cord for lamp;
        Relay;
        Phone/computer.



How to use it:
Step 1: integrate relay with power cord(flow the instruction: https://www.youtube.com/watch?v=5NxVmg8ZFEc)

Step 2: connect wires with raspberry/Arduino(pin 5 as the output)

Step 3: Install xampp on your computer or raspberry pi(it depends which device you want 
to be the server)

Step 4: Run rasbpi.py on your raspberry pi(or Arduino) [change the line 9 in rasbpi.py to your corresponsive address]

Step 5: open a browser to access the main.html


Functionality:
 main.html: 1. pause and replay the background video (JavaScript onclick() function);

         2. turn on/off the light switch(pass form variable to button.php);

button.php: 1. Show switch status;

         2. change switch status;

Raspbi.py: 1.change the output based on button status so that the relay can turn the lamp  on and off;

buttonStatus.php: 1.read switch status from buttonStatus.txt;

buttonStatus.txt: 1. The buttonStatus.txt can be considered as a database to save     information (we only have one datum so installing database is not necessary);


All files have only one responsibility(singleton design pattern), and the project is scalable. There are several updates can be considered:
1. To show how long the light has been turned on/off. (
Method: time_t t = now(); // Store the current time
save current time whenever there is a button status change and compare them so that we can get a light usage report.
2. Control all lights at home.
        

