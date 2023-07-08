#include<iostream>
using namespace std;
class vehicle {
protected:
	int enginecapacity;
	int seatcapacity;
public:
	vehicle() {
		enginecapacity = 1400;
		seatcapacity = 5;
		
	}
	vehicle(int a, int b){
		enginecapacity = a;
		seatcapacity = b;
		
	}
	void display_1() {
		cout << "Engine Capacity is : " << enginecapacity << endl;
		cout << "Seat Capacity is : " << seatcapacity << endl;
		cout << "Display of vehicle class" << endl;
	}
	void changeEnginecapacity(int a) {
		enginecapacity = a;
	}
	void changeSeatcapacity(int a) {
		seatcapacity = a;
	}
	~vehicle() {

	}
};
class car :public vehicle {
private:
	int windscreensize;
	int steeringsize;
public:
	car() {
		windscreensize = 14;
		steeringsize = 9;

	}
	car(int a, int b, int c, int d):vehicle(c,d) {
		windscreensize = a;
		steeringsize = b;

	}
	void display_2() {
		cout << "windscreensize is : " << windscreensize << endl;
		cout << "steeringsize is : " << steeringsize << endl;
		cout << "Display of Car " << endl;
	}
	~car(){
		
	}
};
class bike:public vehicle {
private:
	int handlesize;
public:
	bike() {
		handlesize = 26;
	
	}
	bike(int a, int b, int c): vehicle(b,c) {
		handlesize = a;
	}
	void display_3() {
		cout << "Handle Size is : " << handlesize<<endl;
		cout << "Display of class bike " << endl;
	}
	~bike() {
		
	}
}; 
void main() {
	bike* s1 = new bike();
	car* s2 = new car();
	s1->display_3();
	s2->display_2();
	s1->changeEnginecapacity(700);
	s2->changeEnginecapacity(150);
	s1->display_1();
	s2->display_1();
	
	delete s1;
	delete s2;
}