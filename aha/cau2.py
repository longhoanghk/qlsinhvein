import xml.etree.ElementTree as read
tree=read.ElementTree(file='sinhvien.xml')
root=tree.getroot()
for sv in root:
    if (sv.tag=='sinhvien'):
        

       for i in sv:

            if (i.tag=='masv'):
                print('Mă Sinh Viên: '+i.text)
                 
            elif (i.tag=='hoten'):
                print('HỌ Tên: '+i.text)
                 
            
                 
            elif (i.tag=='ngaysinh'):
                print('Ngày Sinh: '+i.text)
                 
            elif (i.tag=='quequan'):
                print('Quê Quán: '+i.text+"")

                   
            elif (i.tag=='diem_tin_hoc'):
                print('Điểm tin học: '+i.text+"\n_______________________")
              

              
   
                 
                 
     
          





             
             
    
