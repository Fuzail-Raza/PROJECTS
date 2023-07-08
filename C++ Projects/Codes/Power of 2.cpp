#include<iostream>
using namespace std;
int main() {

	int num;
	cout << "Enter Number ";
	cin >> num;
	for (int i = 0; i <=30; i++)
	{
		if (pow(2, i)== num) {
			cout << "Number can be represent in power of 2 ";
			return 0;
		}
	}

			cout << "Number can not be represent in power of 2 ";


}