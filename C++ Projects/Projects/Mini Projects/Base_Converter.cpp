#include<iostream>
using namespace std;
int ans = 0;


void ToDecimal() {
	int digit = 0, i = 0, num, base;
	cout << "Enter Number : ";
	cin >> num;
	cout << "Enter Base ";
	cin >> base;

	while (num != 0) {
		digit = num % 10;
		if (digit != 0) {
			ans = (pow(base, i)*digit) + ans;

		}
		i++;
		num = num / 10;
	}
}
void ToBase() {
	int num, base, digit = 0, i = 0, rem = 0;
	
	cout << "Enter Number : ";
	cin >> num;
	cout << "Enter Base ";
	cin >> base;
	while (num!=0)
	{
		rem = num % base;
		ans = (rem*pow(10,i)) + ans;
		num = num / base;
		i++;
	}
}

void main() {
	
	short int choice;
	cout << "Press 1 to convert base 10 \nPress 2 to conert from Base 10" << endl;
	cin >> choice;
	choice==1?ToDecimal():ToBase();
	
	
		cout << "Answer is : " << ans << endl;

}