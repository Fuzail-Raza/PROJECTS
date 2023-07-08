#include<iostream>
using namespace std;
void main() {
	int row;
	cout << "Enter rows";
	cin >> row;
	int count = 1;
	for (int i = 1; i <= row; i++) { 
		cout << endl;

		for (int k = 1; k < i; k++) {
			cout << " ";
		}
		for (int j = i; j <= row; j++) {
			cout << "*";
		}

	}

}