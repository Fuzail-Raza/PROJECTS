#include<iostream>
using namespace std;
void main() {
	int row, k;
	cout << "Enter Rows";
	cin >> row;
	int count = 0;
	for (int i = 0; i < row; i++)
	{
		for (int j = 1; j <= row-i; j++)
		{
			cout << j;
		}
		for (int k = 0; k <i ; k++)
		{
			cout << "**";
		}
		for (int j = row-i; j >= 1; j--)
		{
			cout << j;
		}

		cout << endl;
	}
	for (int i = row-1; i >= 0; i--)
	{
		for (int j = 1; j <= row-i; j++)
		{
			cout << j;
		}
		for (int k = 0; k <i ; k++)
		{
			cout << "**";
		}
		for (int j = row-i; j >= 1; j--)
		{
			cout << j;
		}

		cout << endl;
	}
	}