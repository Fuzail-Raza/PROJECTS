#include<iostream>
using namespace std;
int main() {

	int a, b,i=0;
	cout << "Enter Number ";
	cin >> a;
	cout << "Enter Number ";
	cin >>b;
	while (a!=0||b!=0) {
		if (a&1) {
			i++;
		}
		if (b&1) {
			i++;
		}
		a = a >> 1;
		b = b >> 1;
	}
	cout << "Total Ones in "<<a<<"and "<<b<<" = " << i;

	return 0;

}