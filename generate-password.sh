for pass in `cat plain-pass.txt` 
do 
    echo $pass | sha1sum | awk '{print $1}'
done
