#include<iostream>
using namespace std;
int main() {
	int amount;
	cout << "Enter Amount " << endl;
	cin >> amount;
	int hundered, fifty, tewenty, tens;
	if (amount >= 100) {
		hundered = amount/100;
		amount = amount % 100;
	cout << "Amount In Hundereds : " << hundered << endl;
	}
	if(amount>=50)
	{
		fifty = amount / 50;
		amount = amount % 50;

	cout << "Amount In Fifties : " << fifty << endl;
	}

	if(amount>=20)
	{
		tewenty = amount / 20;
		amount = amount % 20;
		cout << "Amount In tewenties : " << tewenty << endl;
	}
	
	if(amount>=10)
	{
		tens = amount / 10;
		amount = amount % 10;

	cout << "Amount In Tens : " << tens << endl;
	}
	
}