#include<iostream>
using namespace std;

void main() {
	int value1 = 9;
	double value2 = 78;
	try {
		if (value1 < 0 || value2 < 0) {
			throw "error";
		}
	}
	catch (string a) {
		cout << a;
	}


	int sum = value1 + value2;
	try {
		if (value1 + value2 > 20) {
			throw "Error Sum";
		}
	}
	catch (string a) {
		cout << a;
	}


	try {
		if (value2 == 0) {
			throw "Error Zero Value";
		}
	}
	catch (string a) {
		cout << a;
	}


	int prod = value1 * value2;
	try {
		if (value1 * value2 > 20) {
			throw "Error Prod";
		}
	}
	catch (string a) {
		cout << a;
	}


	double div = value1 / value2;
	try {
		if (value2 == 0) {
			throw "Error Div";
		}
	}
	catch (string a) {
		cout << a;
	}



	catch (...) {
		cout << "Error Occurs";
	}


}
