#include <iostream>
#include <vector>
#include <string.h>

using namespace std;

int main()
{
    int n;
    cin >> n;
    
    /*
        C
    */
    
    int m[n][n];
    memset(primitiveMatrix, 0, sizeof(m[0][0]) * n * n);
    
    for(int i = 0; i < n; i++){
        for(int j = 0; j < n; j++){
            printf((j == n - 1 ? "%d" : "%d - "), primitiveMatrix[i][j]);
        }
        printf("\n");
    }
    
    
    cout << endl;
    
    /*
        C++
    */
    
    vector<vector<int>> m(n, vector<int>(n));
    
    for(int i = 0; i < n; i++){
        for(int j = 0; j < n; j++){
            cout << matrix[i][j] << (j == n - 1 ? "" : " - ");
        }
        cout << endl;
    }
   
    return 0;
}