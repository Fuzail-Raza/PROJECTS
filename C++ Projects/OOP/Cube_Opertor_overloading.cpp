#include<iostream>
using namespace std;
class Cube {
private:
	double length;
	double width;
	double height;
public:
	Cube() {
		length = 0;
		width = 0;
		height = 0;
	}
	Cube(double a, double b, double c) {
		length = a;
		width = b;
		height = c;
	}
	void display() {
		cout << "Lenght is " << length << endl;
		cout << "Width is " << width << endl;
		cout << "Height is " << height;
	}
	Cube operator + (Cube& r) {
		Cube c;
		c.length = this->length + r.length;
		c.height = this->height + r.height;
		c.width = this->width + r.width;
		return c;
	}
	Cube operator -(Cube& t) {
		Cube s;
		s.length = this->length - t.length;
		s.height = this->height - t.length;
		s.width = this->width - t.width;
		return s;
	}
	Cube operator *(Cube& t) {
		Cube s;
		s.length = this->length * t.length;
		s.height = this->height * t.length;
		s.width = this->width * t.width;
		return s;
	}
	Cube operator /(Cube& t) {
		Cube s;
		s.length = this->length / t.length;
		s.height = this->height / t.length;
		s.width = this->width / t.width;
	}
	void operator = (Cube& t) {
		this->length = t.length;
		this->height = t.height;
		this->width = t.width;
	}
	bool operator == (Cube& t) {
		if (this->length == t.length && this->height == t.height && this->width == t.width)
			return 1;
		else
			return 0;
	}
	bool operator > (Cube& t) {
		double area1 = this->length * this->width * this->height;
		double area2 = t.length * t.height * t.width;
		if (area1 > area2) {
			return 1;
		}
		else
			return 0;
	}
	~Cube() {
	}
};

int main()
{
	Cube r1(2,5,6);
	Cube r2(2,1,3.3);
	Cube r4(2, 3, 4);
	Cube r3 = r1 + r2+r4;
	r3.display();
	Cube r1(2.1, 2.3, 5.9);
	Cube r2;
	//r2 = r1;
	Cube r3 = r1 * r2 * r2;
	r2.display(); r3.display(); r1.display();
	if (r1 == r2)
		cout << "Number is same ";
	else
		cout << "Data is Different";
	if (r1 > r2)
		cout << "Cube is larger ";
	else
		cout << "Cube smaller";
		
}