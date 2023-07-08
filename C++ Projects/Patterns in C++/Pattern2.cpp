#include<iostream>
using namespace std;
void main() {
	int row;
	cout << "Enter rows";
	cin >> row;
	for (int i = 1; i <= row; i++) {
		cout << endl;
		
		for (int j = 1; j <= i; j++) {
			cout << "*";
		}


	}

}