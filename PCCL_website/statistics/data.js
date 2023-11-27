const hac_x = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40];
const mw_x = [5, 15, 25, 35, 45, 55, 65, 75, 85, 95, 105, 115, 125, 135, 145, 155, 165, 175, 185, 195, 205, 215, 225, 235, 245, 255, 265, 275, 285, 295, 305, 315, 325, 335, 345, 355, 365, 375, 385, 395, 405, 415, 425, 435, 445, 455, 465, 475, 485, 495, 505, 515, 525, 535, 545, 555, 565, 575, 585, 595, 605, 615, 625, 635, 645, 655, 665, 675, 685, 695, 705, 715, 725, 735, 745, 755, 765, 775, 785, 795, 805, 815, 825, 835, 845, 855, 865, 875, 885, 895, 905, 915, 925, 935, 945, 955, 965, 975, 985, 995, 1005, 1015, 1025, 1035, 1045, 1055, 1065, 1075, 1085, 1095, 1105, 1115, 1125, 1135, 1145, 1155, 1165, 1175, 1185, 1195, 1205, 1215, 1225, 1235, 1245, 1255, 1265, 1275, 1285, 1295, 1305, 1315, 1325, 1335, 1345, 1355, 1365, 1375, 1385, 1395, 1405, 1415, 1425, 1435, 1445, 1455, 1465, 1475, 1485, 1495, 1505, 1515, 1525, 1535, 1545, 1555, 1565, 1575, 1585, 1595, 1605, 1615, 1625, 1635, 1645, 1655, 1665, 1675, 1685, 1695, 1705, 1715, 1725, 1735, 1745, 1755, 1765, 1775, 1785, 1795, 1805, 1815, 1825, 1835, 1845, 1855, 1865, 1875, 1885, 1895, 1905, 1915, 1925, 1935, 1945, 1955, 1965, 1975, 1985, 1995, 2005];
const clogp_x = [-29.9, -29.7, -29.5, -29.3, -29.1, -28.9, -28.7, -28.5, -28.3, -28.1, -27.9, -27.7, -27.5, -27.3, -27.1, -26.9, -26.7, -26.5, -26.3, -26.1, -25.9, -25.7, -25.5, -25.3, -25.1, -24.9, -24.7, -24.5, -24.3, -24.1, -23.9, -23.7, -23.5, -23.3, -23.1, -22.9, -22.7, -22.5, -22.3, -22.1, -21.9, -21.7, -21.5, -21.3, -21.1, -20.9, -20.7, -20.5, -20.3, -20.1, -19.9, -19.7, -19.5, -19.3, -19.1, -18.9, -18.7, -18.5, -18.3, -18.1, -17.9, -17.7, -17.5, -17.3, -17.1, -16.9, -16.7, -16.5, -16.3, -16.1, -15.9, -15.7, -15.5, -15.3, -15.1, -14.9, -14.7, -14.5, -14.3, -14.1, -13.9, -13.7, -13.5, -13.3, -13.1, -12.9, -12.7, -12.5, -12.3, -12.1, -11.9, -11.7, -11.5, -11.3, -11.1, -10.9, -10.7, -10.5, -10.3, -10.1, -9.9, -9.7, -9.5, -9.3, -9.1, -8.9, -8.7, -8.5, -8.3, -8.1, -7.9, -7.7, -7.5, -7.3, -7.1, -6.9, -6.7, -6.5, -6.3, -6.1, -5.9, -5.7, -5.5, -5.3, -5.1, -4.9, -4.7, -4.5, -4.3, -4.1, -3.9, -3.7, -3.5, -3.3, -3.1, -2.9, -2.7, -2.5, -2.3, -2.1, -1.9, -1.7, -1.5, -1.3, -1.1, -0.9, -0.7, -0.5, -0.3, -0.1, 0.1, 0.3, 0.5, 0.7, 0.9, 1.1, 1.3, 1.5, 1.7, 1.9, 2.1, 2.3, 2.5, 2.7, 2.9, 3.1, 3.3, 3.5, 3.7, 3.9, 4.1, 4.3, 4.5, 4.7, 4.9, 5.1, 5.3, 5.5, 5.7, 5.9, 6.1];
const hba_x = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30];
const hbd_x = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30];
const rotb_x = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30];
const tpsa_x = [0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85, 90, 95, 100, 105, 110, 115, 120, 125, 130, 135, 140];
const fsp3_x = [0.0, 0.05, 0.1, 0.15, 0.2, 0.25, 0.3, 0.35, 0.4, 0.45, 0.5, 0.55, 0.6, 0.65, 0.7, 0.75, 0.8, 0.85, 0.9, 0.95, 1.0, 1.05];
const qed_x = [0.0, 0.01, 0.02, 0.03, 0.04, 0.05, 0.06, 0.07, 0.08, 0.09, 0.1, 0.11, 0.12, 0.13, 0.14, 0.15, 0.16, 0.17, 0.18, 0.19, 0.2, 0.21, 0.22, 0.23, 0.24, 0.25, 0.26, 0.27, 0.28, 0.29, 0.3, 0.31, 0.32, 0.33, 0.34, 0.35, 0.36, 0.37, 0.38, 0.39, 0.4, 0.41, 0.42, 0.43, 0.44, 0.45, 0.46, 0.47, 0.48, 0.49, 0.5, 0.51, 0.52, 0.53, 0.54, 0.55, 0.56, 0.57, 0.58, 0.59, 0.6, 0.61, 0.62, 0.63, 0.64, 0.65, 0.66, 0.67, 0.68, 0.69, 0.7, 0.71, 0.72, 0.73, 0.74, 0.75, 0.76, 0.77, 0.78, 0.79, 0.8, 0.81, 0.82, 0.83, 0.84, 0.85, 0.86, 0.87, 0.88, 0.89, 0.9, 0.91, 0.92, 0.93, 0.94, 0.95, 0.96, 0.97, 0.98, 0.99, 1.0, 1.01];
const hac_y_R1 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.03, 0.08, 0.16, 0.3, 0.51, 0.85, 1.38, 2.19, 3.33, 4.93, 6.51, 7.51, 8.71, 10.04, 11.0, 10.29, 8.88, 7.84, 7.06, 4.86, 2.41, 0.99, 0.11, 0.0, 0.0, 0.0];
const mw_y_R1 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.01, 0.02, 0.05, 0.07, 0.1, 0.19, 0.29, 0.34, 0.5, 0.78, 1.05, 1.33, 1.84, 2.57, 3.15, 3.71, 4.47, 5.11, 5.71, 6.22, 6.77, 7.09, 7.03, 7.06, 6.84, 6.85, 6.33, 5.57, 4.85, 4.11, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const clogp_y_R1 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.01, 0.02, 0.03, 0.06, 0.09, 0.14, 0.2, 0.3, 0.43, 0.58, 0.81, 1.06, 1.41, 1.77, 2.22, 2.71, 3.23, 3.81, 4.36, 4.94, 5.44, 5.86, 6.22, 6.43, 6.48, 6.42, 6.19, 5.86, 5.36, 4.81, 4.18, 3.5, 2.85, 2.22, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const hba_y_R1 = [0.0, 0.0, 0.0, 6.34, 21.53, 30.23, 23.86, 12.47, 4.44, 1.0, 0.13, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const hbd_y_R1 = [85.02, 14.49, 0.43, 0.05, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const rotb_y_R1 = [0.0, 0.0, 0.07, 0.78, 3.38, 8.96, 16.36, 21.86, 21.82, 16.58, 10.19, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const tpsa_y_R1 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 5.54, 2.89, 7.81, 6.41, 11.17, 7.52, 12.53, 10.83, 8.01, 7.09, 5.88, 4.59, 3.49, 2.48, 1.65, 1.04, 0.66, 0.41, 0.0];
const fsp3_y_R1 = [0.01, 0.21, 1.23, 3.12, 5.26, 6.33, 9.61, 10.87, 9.98, 12.9, 9.51, 9.3, 6.12, 4.1, 4.02, 3.7, 3.23, 0.53, 0.0, 0.0, 0.0, 0.0];
const qed_y_R1 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.01, 0.02, 0.03, 0.03, 0.04, 0.06, 0.09, 0.1, 0.12, 0.15, 0.19, 0.26, 0.31, 0.35, 0.4, 0.48, 0.57, 0.7, 0.85, 0.99, 1.11, 1.22, 1.3, 1.45, 1.53, 1.71, 1.89, 2.01, 2.22, 2.36, 2.52, 2.61, 2.72, 2.8, 2.85, 2.89, 2.97, 3.02, 3.02, 3.05, 3.06, 3.04, 3.0, 2.89, 2.82, 2.65, 2.58, 2.37, 2.28, 2.15, 2.05, 1.93, 1.83, 1.79, 1.72, 1.58, 1.48, 1.41, 1.33, 1.22, 1.02, 0.98, 0.82, 0.61, 0.61, 0.5, 0.37, 0.27, 0.18, 0.12, 0.11, 0.11, 0.07, 0.04, 0.01, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const hac_y_R2 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.06, 0.21, 0.61, 1.44, 2.55, 3.88, 5.18, 6.21, 7.21, 8.02, 9.47, 9.67, 9.17, 8.62, 7.66, 6.3, 2.84, 2.65, 2.37, 1.8, 1.44, 1.04, 0.78, 0.44, 0.27, 0.1, 0.01, 0.0, 0.0, 0.0, 0.0];
const mw_y_R2 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.04, 0.06, 0.13, 0.48, 0.71, 0.8, 2.08, 2.88, 2.51, 3.56, 4.44, 4.9, 4.59, 5.35, 6.74, 6.3, 6.48, 6.55, 6.36, 6.17, 5.44, 4.5, 3.32, 2.94, 2.26, 2.06, 1.98, 1.53, 1.21, 0.9, 0.81, 0.73, 0.54, 0.37, 0.3, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const clogp_y_R2 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.01, 0.02, 0.04, 0.07, 0.11, 0.22, 0.33, 0.47, 0.7, 0.96, 1.38, 1.78, 2.32, 2.85, 3.54, 4.01, 4.53, 5.23, 5.75, 6.27, 6.25, 7.12, 6.54, 6.73, 5.97, 5.6, 4.67, 4.02, 3.41, 2.55, 2.0, 1.58, 1.07, 0.87, 0.6, 0.41, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const hba_y_R2 = [0.0, 0.0, 0.0, 0.0, 9.37, 30.84, 31.58, 18.07, 7.46, 2.24, 0.44, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const hbd_y_R2 = [43.76, 45.21, 10.02, 0.96, 0.05, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const rotb_y_R2 = [0.0, 3.67, 10.51, 16.48, 19.39, 18.54, 14.25, 9.26, 4.96, 2.14, 0.8, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const tpsa_y_R2 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 5.0, 2.93, 13.49, 6.17, 9.09, 7.56, 12.09, 7.51, 10.24, 6.09, 5.45, 3.18, 3.25, 2.9, 2.02, 1.11, 0.82, 0.54, 0.37, 0.19, 0.0];
const fsp3_y_R2 = [0.03, 1.98, 2.6, 4.27, 4.66, 5.17, 5.12, 7.98, 7.31, 13.81, 5.12, 7.19, 3.44, 3.19, 3.63, 3.86, 5.5, 9.19, 4.77, 0.01, 0.0, 1.15];
const qed_y_R2 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.01, 0.01, 0.02, 0.01, 0.01, 0.02, 0.03, 0.03, 0.03, 0.04, 0.05, 0.05, 0.06, 0.06, 0.08, 0.09, 0.1, 0.14, 0.13, 0.17, 0.16, 0.21, 0.22, 0.23, 0.28, 0.27, 0.32, 0.39, 0.4, 0.46, 0.52, 0.5, 0.58, 0.56, 0.59, 0.72, 0.68, 0.71, 0.78, 0.78, 0.78, 0.97, 1.03, 1.04, 1.08, 1.22, 1.55, 1.58, 1.64, 1.92, 2.28, 2.22, 2.78, 2.98, 3.06, 3.01, 3.09, 3.48, 3.92, 4.43, 4.08, 3.94, 4.03, 3.63, 4.19, 4.61, 3.75, 3.52, 2.49, 2.23, 2.04, 2.02, 2.15, 1.35, 1.13, 0.28, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const hac_y_R4 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.02, 0.05, 0.13, 0.27, 0.53, 0.98, 1.71, 2.74, 4.0, 5.37, 6.69, 7.84, 8.8, 9.48, 9.74, 9.45, 8.62, 7.46, 6.04, 4.7, 3.33, 1.55, 0.49, 0.0, 0.0, 0.0];
const mw_y_R4 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.01, 0.01, 0.04, 0.08, 0.11, 0.18, 0.33, 0.5, 0.69, 0.99, 1.42, 1.92, 2.4, 2.9, 3.65, 4.31, 4.84, 5.46, 5.98, 6.47, 6.69, 6.81, 6.85, 6.71, 6.4, 5.93, 5.43, 4.86, 4.3, 3.71, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const clogp_y_R4 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.01, 0.02, 0.03, 0.05, 0.07, 0.11, 0.16, 0.23, 0.32, 0.44, 0.6, 0.8, 1.05, 1.33, 1.68, 2.08, 2.54, 3.02, 3.56, 4.11, 4.66, 5.18, 5.66, 6.09, 6.38, 6.55, 6.61, 6.5, 6.25, 5.88, 5.39, 4.84, 4.19, 3.57, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const hba_y_R4 = [0.0, 0.0, 0.0, 0.0, 4.18, 17.17, 26.71, 26.42, 16.68, 7.06, 1.78, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const hbd_y_R4 = [41.54, 45.81, 11.41, 1.18, 0.06, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const rotb_y_R4 = [0.0, 0.01, 1.41, 6.37, 13.35, 18.71, 19.62, 16.58, 11.98, 7.6, 4.37, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const tpsa_y_R4 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 1.87, 1.95, 7.72, 4.61, 6.91, 8.07, 7.83, 8.65, 8.14, 9.02, 7.17, 6.16, 5.19, 4.76, 3.88, 2.91, 2.28, 1.66, 1.21, 0.0];
const fsp3_y_R4 = [0.76, 4.02, 5.28, 7.14, 8.35, 8.81, 11.19, 10.19, 8.75, 8.97, 4.59, 6.02, 5.37, 3.36, 2.0, 0.93, 0.58, 0.52, 1.62, 0.22, 0.0, 1.33];
const qed_y_R4 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.01, 0.01, 0.02, 0.03, 0.04, 0.05, 0.07, 0.08, 0.11, 0.14, 0.18, 0.22, 0.27, 0.32, 0.4, 0.5, 0.62, 0.79, 0.95, 1.14, 1.32, 1.52, 1.67, 1.8, 1.95, 2.03, 2.14, 2.21, 2.27, 2.29, 2.29, 2.34, 2.33, 2.33, 2.34, 2.33, 2.34, 2.32, 2.3, 2.29, 2.25, 2.26, 2.18, 2.16, 2.12, 2.1, 2.05, 1.99, 1.95, 1.95, 1.98, 1.94, 1.92, 1.87, 1.83, 1.8, 1.74, 1.65, 1.52, 1.42, 1.31, 1.24, 1.22, 1.11, 1.04, 0.83, 0.78, 0.71, 0.73, 0.76, 0.62, 0.55, 0.43, 0.36, 0.28, 0.29, 0.29, 0.18, 0.19, 0.05, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const hac_y_R5 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.02, 0.08, 0.18, 0.39, 0.77, 1.3, 1.91, 2.49, 3.1, 3.9, 5.14, 6.61, 7.75, 8.59, 8.98, 9.0, 8.46, 7.7, 6.99, 6.12, 4.92, 3.05, 1.74, 0.65, 0.15, 0.0, 0.0, 0.0];
const mw_y_R5 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.01, 0.03, 0.07, 0.1, 0.17, 0.31, 0.45, 0.66, 0.98, 1.25, 1.5, 1.87, 2.3, 2.66, 3.32, 3.8, 4.39, 4.9, 5.35, 5.59, 5.99, 6.24, 6.08, 6.06, 5.86, 5.66, 5.35, 4.97, 4.38, 3.77, 3.22, 2.7, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const clogp_y_R5 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.01, 0.02, 0.04, 0.07, 0.1, 0.16, 0.23, 0.34, 0.46, 0.62, 0.85, 1.1, 1.39, 1.74, 2.1, 2.5, 2.96, 3.44, 3.93, 4.42, 4.91, 5.27, 5.63, 5.97, 6.0, 6.1, 6.01, 5.79, 5.43, 5.07, 4.53, 4.05, 3.48, 2.87, 2.37, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const hba_y_R5 = [0.0, 0.0, 0.55, 6.21, 19.35, 28.94, 25.35, 14.01, 4.61, 0.88, 0.1, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const hbd_y_R5 = [0.0, 56.18, 37.04, 6.44, 0.33, 0.01, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const rotb_y_R5 = [0.0, 0.0, 0.31, 2.59, 6.21, 12.2, 19.39, 22.11, 18.7, 12.18, 6.31, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const tpsa_y_R5 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.03, 0.01, 0.1, 0.05, 0.4, 0.26, 1.47, 1.75, 3.2, 4.11, 6.33, 8.29, 7.39, 11.24, 9.68, 10.09, 8.15, 8.28, 6.51, 5.36, 3.99, 3.29, 0.0];
const fsp3_y_R5 = [0.05, 2.19, 8.29, 14.75, 15.74, 13.45, 12.45, 11.65, 7.47, 6.67, 2.57, 2.6, 1.32, 0.6, 0.18, 0.02, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const qed_y_R5 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.01, 0.02, 0.03, 0.04, 0.07, 0.09, 0.11, 0.13, 0.15, 0.17, 0.24, 0.3, 0.36, 0.41, 0.46, 0.48, 0.52, 0.63, 0.69, 0.86, 0.92, 1.02, 1.12, 1.2, 1.24, 1.32, 1.44, 1.52, 1.64, 1.76, 1.87, 1.97, 2.04, 2.14, 2.22, 2.2, 2.21, 2.24, 2.21, 2.29, 2.35, 2.41, 2.44, 2.56, 2.55, 2.6, 2.65, 2.59, 2.59, 2.49, 2.44, 2.27, 2.16, 1.98, 1.84, 1.67, 1.59, 1.56, 1.56, 1.51, 1.43, 1.4, 1.41, 1.4, 1.31, 1.11, 1.1, 1.12, 0.89, 0.79, 0.8, 0.63, 0.51, 0.43, 0.38, 0.34, 0.32, 0.26, 0.18, 0.04, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const hac_y_R6 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.02, 0.05, 0.1, 0.21, 0.4, 0.72, 1.22, 1.96, 3.06, 4.59, 6.44, 8.66, 10.88, 12.46, 14.12, 14.45, 12.52, 7.63, 0.49, 0.0, 0.0, 0.0];
const mw_y_R6 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.01, 0.03, 0.04, 0.07, 0.13, 0.18, 0.28, 0.45, 0.68, 0.86, 1.24, 1.86, 2.43, 2.98, 3.96, 5.33, 6.34, 7.26, 8.61, 10.14, 11.1, 11.42, 12.16, 12.45, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const clogp_y_R6 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.01, 0.02, 0.04, 0.07, 0.11, 0.18, 0.28, 0.43, 0.63, 0.9, 1.25, 1.68, 2.22, 2.91, 3.61, 4.43, 5.3, 6.16, 6.95, 7.75, 8.46, 8.93, 9.4, 9.52, 9.54, 9.2, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const hba_y_R6 = [0.0, 0.0, 0.03, 1.77, 16.59, 34.06, 28.97, 13.97, 3.97, 0.6, 0.04, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const hbd_y_R6 = [33.01, 53.11, 12.61, 1.19, 0.07, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const rotb_y_R6 = [0.0, 0.0, 0.09, 4.73, 14.55, 22.92, 23.01, 17.55, 10.33, 4.83, 2.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const tpsa_y_R6 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.05, 0.0, 0.08, 0.21, 0.96, 0.81, 4.81, 5.47, 6.99, 8.91, 10.26, 12.76, 8.02, 10.38, 7.43, 5.89, 4.94, 3.77, 3.26, 1.72, 1.6, 0.9, 0.76, 0.0];
const fsp3_y_R6 = [0.0, 0.0, 0.0, 0.0, 0.12, 0.88, 3.44, 6.43, 8.92, 14.08, 12.59, 19.27, 12.27, 7.15, 5.25, 5.08, 4.29, 0.24, 0.0, 0.0, 0.0, 0.0];
const qed_y_R6 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.01, 0.02, 0.02, 0.03, 0.03, 0.05, 0.06, 0.09, 0.11, 0.12, 0.15, 0.18, 0.21, 0.25, 0.3, 0.37, 0.46, 0.57, 0.72, 0.82, 0.94, 0.98, 1.0, 1.01, 1.03, 1.05, 1.11, 1.19, 1.31, 1.42, 1.59, 1.72, 1.94, 2.03, 2.16, 2.3, 2.37, 2.53, 2.68, 2.81, 3.14, 3.35, 3.58, 3.91, 3.97, 4.1, 4.0, 3.89, 3.76, 3.47, 3.26, 3.0, 2.72, 2.46, 2.19, 1.94, 1.66, 1.51, 1.24, 1.12, 0.85, 0.76, 0.61, 0.49, 0.37, 0.28, 0.19, 0.13, 0.1, 0.07, 0.05, 0.05, 0.01, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const hac_y_R8 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.02, 0.06, 0.13, 0.28, 0.54, 0.98, 1.71, 2.77, 4.26, 6.08, 8.25, 10.47, 12.27, 14.06, 14.8, 13.64, 8.65, 1.02, 0.0, 0.0, 0.0];
const mw_y_R8 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.02, 0.03, 0.04, 0.09, 0.17, 0.18, 0.35, 0.63, 0.8, 1.03, 1.67, 2.4, 2.85, 3.7, 5.02, 6.19, 7.11, 8.27, 9.96, 11.14, 11.88, 12.72, 13.75, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const clogp_y_R8 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.01, 0.02, 0.04, 0.07, 0.12, 0.19, 0.29, 0.43, 0.63, 0.89, 1.24, 1.68, 2.2, 2.82, 3.55, 4.3, 5.13, 5.96, 6.76, 7.44, 7.99, 8.36, 8.53, 8.46, 8.18, 7.68, 7.02, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const hba_y_R8 = [0.0, 0.0, 0.01, 0.24, 5.7, 21.61, 32.02, 25.18, 11.85, 3.02, 0.37, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const hbd_y_R8 = [25.44, 54.01, 19.07, 1.38, 0.09, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const rotb_y_R8 = [0.0, 0.0, 0.23, 4.91, 14.63, 22.32, 22.25, 17.19, 10.66, 5.4, 2.39, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];
const tpsa_y_R8 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.08, 0.05, 0.28, 0.67, 1.36, 1.65, 4.27, 4.97, 6.78, 8.38, 8.03, 9.29, 8.22, 9.98, 7.4, 7.06, 5.37, 4.91, 3.86, 2.67, 2.33, 1.41, 0.97, 0.0];
const fsp3_y_R8 = [0.0, 0.0, 0.0, 0.0, 0.63, 3.0, 7.89, 11.09, 11.81, 19.51, 13.95, 13.01, 5.87, 5.41, 5.13, 2.47, 0.23, 0.0, 0.0, 0.0, 0.0, 0.0];
const qed_y_R8 = [0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.01, 0.02, 0.03, 0.05, 0.08, 0.13, 0.18, 0.22, 0.27, 0.35, 0.44, 0.53, 0.58, 0.65, 0.74, 0.88, 1.06, 1.22, 1.35, 1.47, 1.55, 1.61, 1.69, 1.81, 1.97, 2.12, 2.27, 2.41, 2.55, 2.64, 2.71, 2.77, 2.9, 3.0, 3.19, 3.35, 3.52, 3.66, 3.7, 3.71, 3.56, 3.44, 3.2, 2.91, 2.65, 2.48, 2.21, 2.03, 1.88, 1.66, 1.5, 1.34, 1.18, 1.05, 0.91, 0.74, 0.62, 0.54, 0.45, 0.36, 0.31, 0.27, 0.24, 0.21, 0.17, 0.15, 0.12, 0.11, 0.08, 0.07, 0.05, 0.04, 0.03, 0.02, 0.01, 0.01, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0];