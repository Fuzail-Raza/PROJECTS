#include<iostream>
using namespace std;
void main() {
	int row, k;
	cout << "Enter Rows";
	cin >> row;
	for (int i = 1; i <= row; i++)
	{
		for (int j = row; j > i; j--)
		{
			cout << " ";
		}
		for (k = 1; k < i; k++)
		{
			cout << k;
		}
		for (int l = k; l >= 1; l--)
		{
			cout << l;
		}

		cout << endl;
	}

}