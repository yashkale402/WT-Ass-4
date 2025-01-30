
Practical assignment 2 
SET A
1.	Write the definition for a class called Cylinder that contains data member’s radius and height. The class has the following member functions: 
a. void setradius(float) to set the radius of data member
b. void setheight(float) to set the height of data member 
c. float volume( ) to calculate and return the volume of thecylinder 
d. float area( ) to calculate and return the area of the cylinder. 
Write a C++ program to create two cylinder objects and display each cylinder and its area and volume.
#include <iostream>
#include <cmath> // For M_PI (PI constant)
using namespace std;
class Cylinder {
private:
float radius;
float height;
public:
    // Constructor to initialize radius and height
Cylinder() : radius(0), height(0) {}
    // Function to set the radius
void setradius(float r) {
radius = r;
    }
    // Function to set the height
void setheight(float h) {
height = h;
    }
    // Function to calculate the volume of the cylinder
float volume() {
return M_PI * radius * radius * height;  // Volume formula: π * r^2 * h
    }

    // Function to calculate the surface area of the cylinder
float area() {
return 2 * M_PI * radius * (radius + height); // Area formula: 2πr(r + h)
    }
    // Function to display the cylinder details
void display() {
cout<< "Cylinder with radius: " << radius << " and height: " << height <<endl;
cout<< "Volume: " << volume() <<endl;
cout<< "Surface Area: " << area() <<endl;
    }
};
int main() {
    // Create two cylinder objects
    Cylinder cylinder1, cylinder2;
    // Set radius and height for the first cylinder
cylinder1.setradius(3.5);
cylinder1.setheight(7.0);
    // Set radius and height for the second cylinder
cylinder2.setradius(4.0);
cylinder2.setheight(10.0);
    // Display details of the first cylinder
cout<< "Cylinder 1:" <<endl;
cylinder1.display();

    // Display details of the second cylinder
cout<< "\nCylinder 2:" <<endl;
cylinder2.display();
return 0;
}


2.	Define a class string to perform different operations:
a. To find length ofstring.
b. To concatenate twostrings.
c. To reverse thestring.
d. To compare two strings. 
#include <iostream>
#include <cstring>

class String {
private:
    char str[100];  // Simple fixed-size array to store the string
    
public:
    // Constructor to initialize the string
    String(const char* input) {
        strcpy(str, input);
    }
    
    // a. Method to find the length of the string
    int length() const {
        return strlen(str);
    }
    
    // b. Method to concatenate two strings
    String concatenate(const String& other) const {
        char result[200];  // Temporary array to hold concatenated result
        strcpy(result, str);
        strcat(result, other.str);
        return String(result);
    }
    
    // c. Method to reverse the string
    String reverse() const {
        int len = length();
        char reversed[100];  // Temporary array to hold the reversed string
        
        for (int i = 0; i < len; i++) {
            reversed[i] = str[len - i - 1];
        }
        reversed[len] = '\0';  // Null-terminate the string
        
        return String(reversed);
    }
    
    // d. Method to compare two strings
    bool compare(const String& other) const {
        return strcmp(str, other.str) == 0;
    }
    
    // Method to display the string
    void display() const {
        std::cout << str << std::endl;
    }
};

int main() {
    String str1("Hello");
    String str2("World");
    
    // a. Length of string
    std::cout << "Length of str1: " << str1.length() << std::endl;  // Output: 5
    
    // b. Concatenate two strings
    String str3 = str1.concatenate(str2);
    std::cout << "Concatenation of str1 and str2: ";
    str3.display();  // Output: HelloWorld
    
    // c. Reverse the string
    String str4 = str1.reverse();
    std::cout << "Reversed str1: ";
    str4.display();  // Output: olleH
    
    // d. Compare two strings
    if (str1.compare(str2)) {
        std::cout << "str1 and str2 are equal." << std::endl;
    } else {
        std::cout << "str1 and str2 are not equal." << std::endl;  // Output: not equal
    }
    
    return 0;
}














3.	Create a class named „DISTANCE‟ with: - feet and inches as data members. The class has the following member functions: 
a. To input distance 
b. To output distance 
c. To add two distance objects 
Write a C++ program to create objects of DISTANCE class. Input two distances and output the sum.
#include <iostream>
using namespace std;
class Distance
{
	private:
		int feet;
		int inches;
	public:
		void set_distance()
		{
			cout<<"Enter feet: ";
			cin>>feet;
			cout<<"Enter inches: ";
			cin>>inches;
		}
		void get_distance()
		{
			cout<<"Distance is feet= "<<feet<<", inches= "<<inches<<endl;
		}
		void add(Distance d1, Distance d2)
		{
			feet = d1.feet + d2.feet;
			inches = d1.inches + d2.inches;
			feet = feet + (inches / 12);
			inches = inches % 12;
		}
};
int main()
{
	Distance d1, d2, d3;
	d1.set_distance();
	d2.set_distance();
	d3.add(d1, d2);
	d3.get_distance();
	return 0;
}




4.	Write a C++ program to create a class District. Having district_code, district_name, area_sqft, population, literacy_rate. For displaying details use appropriate manipulators. The program should contain following menu :
a. Accept details of n district
b. Display details of district.
c. Display details of district having highest literacy rate.
d. Display details of district having least population

#include <iostream>
#include <string>
using namespace std;
class District {
public:
int district_code;
string district_name;
float area_sqft;
int  population;
float  literacy_rate;

    // Function to input details of the district
void  input() {
cout<< "Enter district code: ";
cin>>district_code;
cin.ignore();  // To ignore the newline left by cin

cout<< "Enter district name: ";
getline(cin, district_name);

cout<< "Enter area (in sqft): ";
cin>>area_sqft;

cout<< "Enter population: ";
cin>> population;

cout<< "Enter literacy rate (percentage): ";
cin>> literacy_rate;
    }

    // Function to display details of the district
void display() {
cout<< "District Code: " <<district_code<<endl;
cout<< "District Name: " <<district_name<<endl;
cout<< "Area: " <<area_sqft<< " sqft" <<endl;
cout<< "Population: " << population <<endl;
cout<< "Literacy Rate: " << literacy_rate << "%" <<endl;
    }
};





int main() {
int n;
cout<< "Enter the number of districts: ";
cin>> n;

    District districts[n];  // Create an array of District objects

    // Input details of each district
for (int i = 0; i < n; i++) {
cout<< "\nEnter details for district " << (i + 1) <<endl;
districts[i].input();
    }

    // Display all districts
cout<< "\nAll Districts:\n";
for (int i = 0; i < n; i++) {
districts[i].display();
cout<<endl;
    }

    // Find and display district with highest literacy rate
int highestIndex = 0;
for (int i = 1; i < n; i++) {
if (districts[i].literacy_rate > districts[highestIndex].literacy_rate) {
            highestIndex = i;
        }
    }
cout<< "\nDistrict with highest literacy rate:\n";
districts [highestIndex].display ();

    // Find and display district with least population
int leastIndex = 0;
for (int i = 1; i < n; i++) {
if (districts[i].population < districts[leastIndex].population) {
leastIndex = i;
        }
    }
cout<< "\nDistrict with least population:\n";
districts[leastIndex].display();

return 0;
}





SET B 

1.	Create a class for different departments in a college containing data members as Dept_Id, Dept_Name, Establishment_year, No_of_Faculty, No_of_students. 
Write a C++ program with following member functions:
 a. To accept „n‟ Department details
 b. To display department details of a specific Department
 c. To display department details according to a specified establishment year
#include<iostream>
using namespace std;
classDept
{
intdept_id;
chardept_name[20];
public : int est_year;
intno_of_faculty,no_of_student;
public:
void accept();
void display();
voiddisplay_dept(int);
};
voidDept :: accept()
{
cout<<"Department ID ";
cin>>dept_id;
cout<<"Department Name";
cin>>dept_name;
cout<<"Establishment Year";
cin>>est_year;
cout<<"No of Faculty";
cin>>no_of_faculty;
cout<<"No of Student ";
cin>>no_of_student;
}
voidDept :: display()
{
cout<<"Detail of Department"<<endl;
cout<<"Department ID "<<dept_id<<endl;
cout<<"Department Name"<<dept_name<<endl;
cout<<"Establishment Year"<<est_year<<endl;
cout<<"No of Faculty"<<no_of_faculty<<endl;
cout<<"No of Student "<<no_of_student<<endl;
}
voidDept :: display_dept(int n)
{
if(est_year==n)
{
cout<<"Detail of Department"<<endl;
cout<<"Department ID "<<dept_id<<endl;
cout<<"Department Name"<<dept_name<<endl;
cout<<"Establishment Year"<<est_year<<endl;
cout<<"No of Faculty"<<no_of_faculty<<endl;
cout<<"No of Student "<<no_of_student<<endl;
}
}
int main()
{
Deptd[4];
inti,n;
printf("Enter details of 4 departments");
for(i=0;i<4;i++)
    {
d[i].accept();
d[i].display();
    }
cout<<"Enter establishment year";
cin>>n;
for(i=0;i<4;i++)
    {
if(d[i].est_year==n)
    {
d[i].display();  
    }
    }
return 0;

}

























2.	Write a C++ program to define a class Bus with the followingspecifications :
 Bus No
 Bus Name
 No of Seats
 Starting point
 Destination
Write a menu driven program by using appropriate manipulators to
a. Accept details of n buses.
b. Display all busdetails.
c. Display details of bus from specified starting and ending destinationbyuser.
#include <iostream>
#include <vector>
#include <string>

using namespace std;

class Bus {
public:
stringbusNo;
stringbusName;
intnoOfSeats;
stringstartingPoint;
string destination;

voiddisplayDetails() const {
cout<< "Bus No: " <<busNo
<< ", Bus Name: " <<busName
<< ", Seats: " <<noOfSeats
<< ", Start: " <<startingPoint
<< ", Destination: " << destination <<endl;
    }
};

voidacceptBusDetails(vector<Bus>& buses) {
    Bus bus;
cout<< "Enter Bus No: ";
cin>>bus.busNo;
cout<< "Enter Bus Name: ";
cin>>bus.busName;
cout<< "Enter No of Seats: ";
cin>>bus.noOfSeats;
cout<< "Enter Starting Point: ";
cin>>bus.startingPoint;
cout<< "Enter Destination: ";
cin>>bus.destination;

buses.push_back(bus);
}

voiddisplayAllBuses(const vector<Bus>& buses) {
for (const auto& bus : buses) {
bus.displayDetails();
    }
}

voiddisplayBusesByRoute(const vector<Bus>& buses, const string& start, const string& end) {
for (const auto& bus : buses) {
if (bus.startingPoint == start &&bus.destination == end) {
bus.displayDetails();
        }
    }
}

int main() {
vector<Bus> buses;
int choice;

do {
cout<< "\nMenu:\n";
cout<< "1. Add Bus\n";
cout<< "2. Display All Buses\n";
cout<< "3. Find Buses by Route\n";
cout<< "4. Exit\n";
cout<< "Enter your choice: ";
cin>> choice;

switch (choice) {
case 1:
acceptBusDetails(buses);
break;
case 2:
displayAllBuses(buses);
break;
case 3: {
string start, end;
cout<< "Enter starting point: ";
cin>> start;
cout<< "Enter destination: ";
cin>> end;
displayBusesByRoute(buses, start, end);
break;
            }
case 4:
cout<< "Exiting.\n";
break;
default:
cout<< "Invalid choice. Try again.\n";
        }
    } while (choice != 4);

return 0;
}

