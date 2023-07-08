#include<iostream>
using namespace std;
int main() {
	int num,power;
	cout << INT32_MAX;
	cout << "Enter Number ";
	cin >> num;
	cout << "Enter Power ";
	cin >> power;
	if (num>INT32_MAX) {
		return 0;
	}
	for (int i = 0; i <= 30; i++)
	{
		if (pow(power, i) == num) {
			cout << "Number can be represent in power of  "<<power;
			return 0;
		}
	}

	cout << num<<" can not be represent in power of  "<<power;


}