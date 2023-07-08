#include<iostream>
using namespace std;
double getTriangleArea(double base, double height) {
	return 0.5 * base * height ;
}
double getRectangleArea(double length, double width) {
	 return length * width ;
}
void main() {
	double lenght, width, base, height;
	cout << "Enter Triangle Base ";
	cin >> base;
	cout << "Enter Triangle Height ";
	cin >> height;
	cout << "Enter Rectangle length ";
	cin >> lenght;
	cout << "Enter Rectangle Width ";
	cin >> width;
	cout << "Area of triangle is : " <<getTriangleArea(base, height)<<endl;
	cout << "Area of Rectangle is : " <<getRectangleArea(lenght, width);
}