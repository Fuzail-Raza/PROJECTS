#include<iostream>
using namespace std;
class Account {
private:
	string accno, acctitle;
	double amount;
	char acctype;
public:
	Account() {
		accno = "2341-2122-4563";
		acctitle = "Fuzail Raza ";
		amount = 1000;
		acctype = 's';
	}
	Account(string accno_2 , string acctitle_2, double amount_2, char acctype_2) {
		accno = accno_2;
		acctitle = acctitle_2;
		amount = amount_2;
		acctype = acctype_2;
	}
	void deposit(double deposit) {
		amount = amount + deposit;
	}
	void withdraw(double withdraw) {
		if (withdraw > amount) {
			cout << "Insufficient Balance " << endl;
		}
		else {
			amount = amount - withdraw;
			cout << "Withdraw Succesfull " << endl;
		}
	}
	void changetype() {
		if (acctype == 'c') {
			acctype = 's';
			cout << "Account Type change From Current to Saving "<<endl;
		}
		else if (acctype == 's') {
			acctype = 'c';
			cout << "Account Type change From Saving to Current " << endl;
		}
	}
	void checkBalance() {
		cout << "Current Balance is : " << amount << endl;
	}
	void displataccountinfo() {
		cout << "Account Type : " << acctype<<endl;
		cout << "Account Title " << acctitle << endl;
		cout << "Account No : " << accno << endl;
		cout << "Current Balance is : " << amount << endl;
	}
	string getAccno() {
		return accno;
	}
	string getAccTitle() {
		return acctitle;
	}
	double getAmount() {
		return amount;
	}
	char getAccType() {
		return acctype;
	}
	void setAccno(string accno_1) {
		accno = accno_1;
	}
	void setAccTitle(string acctitle_1) {
		acctitle = acctitle_1;
	}
	void setAmount(double amount_1) {
		amount = amount_1;
	}
	void setAccType(char acctype_1) {
		acctype = acctype_1;
	}

};
void main() {
	char choice;
	Account* a1=new Account();
	a1->checkBalance();
	a1->setAmount(1000);
	a1->checkBalance();
	a1->withdraw(700);
	cout << "Do u Want to change Account type : ";
	cin >>choice ;
	if (choice == 'y')
		a1->changetype();
	a1->displataccountinfo();
	Account* a2 = new Account("2345-4544-2331-3231 ","Fuzai Raza ",1000,'c');
	a2->deposit(5000);
	a1->displataccountinfo();
	a2->displataccountinfo();
}