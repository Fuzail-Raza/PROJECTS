#include<iostream>
#include<string>
using namespace std;
class Cricketer {
protected:
	string name;
	int shirtno;
	string dob;
	int odi_rating;
	int test_rating;
	int t20_rating;
	int startyear;
public:
	Cricketer() {
		name = "Fuzail Raza";
		shirtno = 26;
		dob = "02-12-2002";
		odi_rating = 01;
		test_rating = 01;
		t20_rating = 01;
		startyear = 2009;

	}
	Cricketer(string a,int b,string c,int d,int e,int f ,int g) {
		name = a;
		shirtno = b;
		dob = c;
		odi_rating = d;
		test_rating = e;
		t20_rating = f;
		startyear = g;

	}
	int calculateage() {
		string age =dob.substr(dob.length() - 4);
		int age_1 = stoi(age);
		age_1= 2022 - age_1;
		return age_1;
	}
	int calculateExperience() {
		return (2022 - startyear);
	}
	void changeODIRating(int a) {
		odi_rating = a;
	}
	void changeTestrating(int a) {	
		test_rating = a;
	}
	void changeT20Rating(int a) {
		t20_rating = a;
	}
	~Cricketer() {

	}
};
class Bowler : public Cricketer {
private:
	string type;
	int total_wickets;
	int match_played;
public:
	Bowler() {
		type = "OFF-Spinner";
		total_wickets = 126;
		match_played = 226;
	
	}
	Bowler(string type_1,int wikts,int matches, string nam, int shrt_no, string dob_1, int odirat, int testrat, int t20rat, int startyer):Cricketer(nam,shrt_no,dob_1,odirat,testrat,t20rat,startyer) {
		type = type_1;
		total_wickets = wikts;
		match_played = matches;
	
	}

	int calculateBowlAverage() {
		return (total_wickets / match_played);
	}
	void updateMatches(int a) {
		match_played = match_played + a;
	}
	void updateWickets(int a) {
		total_wickets = total_wickets + a;
	}
	~Bowler() {
	
	}
};
class Batsman : public Cricketer {
private:
	string type;
	int total_runs;
	int match_played;
	int best_score;
public:
	Batsman() {
		type = "Left hand";
		total_runs = 10213;
		match_played = 225;
		best_score = 375;
		
	}
	Batsman(string type_1,int totlrns,int matchplay,int bestscr, string nam, int shrt_no, string dob_1, int odirat, int testrat, int t20rat, int startyer) :Cricketer(nam, shrt_no, dob_1, odirat, testrat, t20rat, startyer){
		type = type_1;
		total_runs = totlrns;
		match_played = matchplay;
		best_score = bestscr;
		
	}
	int calculateBatAverage() {
		return (total_runs / match_played);
	}
	void updatematches(int a) {
		match_played = match_played + a;
	}
	void updateruns(int a) {
		total_runs = total_runs + a;;
	}
	~Batsman() {
		
	}
};
class AllRounder:public Batsman,public Bowler{
public:
	AllRounder() {
		
	}
	AllRounder(string a, int b, string c, int d, int e, int f, int g, string type_1, int wikts, int matches, string nam, int shrt_no, string dob_1, int odirat, int testrat, int t20rat, int startyer) : Bowler( type_1, wikts, matches, nam, shrt_no, dob_1, odirat, testrat, t20rat,startyer),Batsman(){

	}
	~AllRounder() {
		
	}
};
void main() {
	Batsman* a1 = new Batsman("Right ", 5400, 120, 226, "Fuzail Raza", 12, "2-11-1990", 3, 2, 3, 1995);
	cout <<endl <<a1->calculateage();
	cout << endl <<a1->calculateExperience();
	Bowler a2;
	cout << a2.calculateExperience();
	AllRounder* a3=new AllRounder();
	a3->~AllRounder();
}

