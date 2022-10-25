#include<iostream>
using namespace std;

int main()
{
    int m, n;
    cin >> m>> n;
    int product = m*n;
    int dominos_num = (product / 2);
    cout << dominos_num << endl;
}
