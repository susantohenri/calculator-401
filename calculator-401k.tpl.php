<div id="calculator-401k">
  <table id="calculator-401k-upper-table">
    <thead>
      <tr>
        <th colspan="2">401(k) Plan Assumptions</th>
        <th colspan="3">Summary of Results</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <td>Current Age</td>
        <td><input type="text" data-cell="E5" data-format="" data-formula="" value="40"></td>
        <td></td>
        <td>Years to Invest</td>
        <td data-cell="H5" data-format="" data-formula="IF(E6-E5<=0,0,E6-E5)+1">26</td>
      </tr>
      <tr>
        <td>Age at Retirement</td>
        <td><input type="text" data-cell="E6" data-format="" data-formula="" value="65"></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td data-cell="E7" colspan="2"><i>Balance and Salary</i></td>
        <td data-cell="F7"></td>
        <td colspan="2" data-cell="H7"><i>Future Value</i></td>
      </tr>

      <tr>
        <td>Current 401(k) Balance</td>
        <td><input type="text" data-cell="E8" data-format="$ 0,0" data-formula="" value="100000"></td>
        <td colspan="2" data-cell="G8" data-format="" data-formula="CONCAT('Estimated Value After ',H5,' Years')">Estimated Value After 26 Years</td>
        <td data-cell="H8" data-format="$ 0,0" data-formula="">2916431</td>
      </tr>
      <tr>
        <td>Current Annual Salary</td>
        <td><input type="text" data-cell="E9" data-format="$ 0,0" data-formula="" value="200000"></td>
        <td></td>
        <td>Ending Salary</td>
        <td data-cell="H9" data-format="$ 0,0" data-formula="">328121</td>
      </tr>
      <tr>
        <td>Annual Increase in Salary</td>
        <td><input type="text" data-cell="E10" data-format="0.00 %" data-formula="" value="2"></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td data-cell="E11" colspan="2"><i>Contributions</i></td>
        <td data-cell="F11"></td>
        <td colspan="2" data-cell="H11"><i>Total Contributions</i></td>
      </tr>

      <tr>
        <td>% of Salary to Contribute</td>
        <td><input type="text" value="10" data-cell="E12" data-format="0.00%" data-formula=""></td>
        <td></td>
        <td>Your Contributions</td>
        <td data-cell="H12" data-format="$ 0,0" data-formula="">673418</td>
      </tr>
      <tr>
        <td>Employer Match (% of contrib.)</td>
        <td><input type="text" value="50" data-cell="E13" data-format="0.00%" data-formula=""></td>
        <td></td>
        <td>Employer Contributions</td>
        <td data-cell="H13" data-format="$ 0,0" data-formula="">202025</td>
      </tr>
      <tr>
        <td>Employer Maximum (% of salary)</td>
        <td><input type="text" value="6" data-cell="E14" data-format="0.00%" data-formula=""></td>
        <td></td>
        <td>Total Contributions</td>
        <td data-cell="H14" data-format="$ 0,0" data-formula="H13+H12">875444</td>
      </tr>
      <tr>
        <td colspan="2" data-cell="E15" data-format="" data-formula="=IF(H5 &gt; 0,IF(E34 &gt; 16500,'Warning: Annual Contribution Over $16,500 Limit',' . '),' . ')"></td>
        <td data-cell="F15"></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td data-cell="E16" colspan="2"><i>Return</i></td>
        <td data-cell="F16"></td>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <td>Annual Rate of Return</td>
        <td><input type="text" value="7" data-cell="E17" data-format="0.00%" data-formula=""></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>Payments Per Year</td>
        <td>
          <select data-cell="E18" data-format="" data-formula="">
            <option>26</option>
          </select>
        </td>
        <td></td>
        <td></td>
        <td></td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>

  <br>
  <table id="calculator-401k-middle-table">
    <tr>
      <td>graph goes here</td>
      <td>

        <table id="calculator-401k-middle-right-table">
          <tr>
            <td>Random Rates</td>
            <td>
              <select data-cell="H22" data-format="" data-formula="">
                <option value="Off">Off</option>
                <option value="On">On</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>Min</td>
            <td data-cell="H23" data-format="0.00%" data-formula="">-4</td>
          </tr>
          <tr>
            <td>Max</td>
            <td data-cell="H24" data-format="0.00%" data-formula="">10</td>
          </tr>
          <tr>
            <td>Average</td>
            <td data-cell="H25" data-format="0.00%" data-formula="">7</td>
          </tr>
        </table>

      </td>
    </tr>
  </table>

  <br>
  <table id="calculator-401k-lower-table">
    <tr>
      <td>

        <table id="calculator-401k-lower-left-table">
          <thead>
            <tr>
              <th>Year</th>
              <th>Age</th>
              <th>Rate</th>
              <th>Salary</th>
              <th>Annual<br>Contribution</th>
              <th>Employer<br>Contribution</th>
              <th>Interest</th>
              <th>Balance</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td>
                <input type="text" data-cell="E33" data-format="" data-formula="">
              </td>
              <td>
                <input type="text" data-cell="F33" data-format="" data-formula="">
              </td>
              <td></td>
              <td data-cell="H33" data-format="$ 0,0.00" data-formula="E8"></td>
            </tr>

            <?php for ($row = 34; $row <= 93; $row++) : ?>
              <?php $prev_row = $row - 1 ?>
              <tr>
                <td data-cell="<?= "A{$row}" ?>" data-format="" data-formula="<?= "IF(A{$prev_row}<H5,A{$prev_row}+1,'#ISERROR')" ?>"></td>
                <td data-cell="<?= "B{$row}" ?>" data-format="" data-formula="<?= "IF('#ISERROR'=A{$row},'',E5+A{$row}-1)" ?>"></td>
                <td data-cell="<?= "C{$row}" ?>" data-format="0.00%" data-formula="<?= "IF('#ISERROR'=A{$row},'',IF('On'=H22,H23+RAND()*(H24-H23),E17))" ?>"></td>
                <td data-cell="<?= "D{$row}" ?>" data-format="0,0" data-formula="<?= "IF(34={$row}, E9, IF('#ISERROR'=A{$row},'',IF(A{$row}<=H5,(1+E10)*D{$prev_row},0)))" ?>"></td>
                <td data-cell="<?= "E{$row}" ?>" data-format="0,0" data-formula="<?= "IF('ISERROR'=A{$row},'',IF(A{$row}<=H5,E12*D{$row},0))" ?>"></td>
                <td data-cell="<?= "F{$row}" ?>" data-format="0,0" data-formula="<?= "IF('ISERROR'=A{$row},'',IF(A{$row}<=H5,MIN(E13*E{$row},E14*E13*D{$row}),0))" ?>"></td>
                <td data-cell="<?= "G{$row}" ?>" data-format="0,0.00" data-formula="<?= "IF('ISERROR'=A{$row},'',FV(C{$row}/E18,E18,-(E{$row}+F{$row})/E18,-H{$prev_row})-(H{$prev_row}+E{$row}+F{$row}))" ?>"></td>
                <td data-cell="<?= "H{$row}" ?>" data-format="0,0.00" data-formula="<?= "IF('ISERROR'=A{$row},'',H{$prev_row}+E{$row}+F{$row}+G{$row})" ?>"></td>
              </tr>
            <?php endfor; ?>

          </tbody>
        </table>

      </td>
      <td></td>
      <td>

        <table id="calculator-401k-lower-right-table">
          <thead>
            <tr>
              <th>My Contribution</th>
              <th>Total Contribution</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>&nbsp;</td>
              <td></td>
            </tr>
            <?php for ($row = 34; $row <= 93; $row++) : ?>
              <?php $prev_row = $row - 1 ?>
              <tr>
                <td data-cell="<?= "J{$row}" ?>" data-format="0,0" data-formula="<?= "IF(OR('ISERROR'=A{$row}, J{$prev_row}=SUM(E33:E{$row}), 'ISERROR'=J{$prev_row}),'ISERROR',SUM(E33:E{$row}))" ?>"></td>
                <td data-cell="<?= "K{$row}" ?>" data-format="0,0" data-formula="<?= "IF('ISERROR'=J{$row},'',SUM(E33:F{$row}))" ?>"></td>
              </tr>
            <?php endfor ?>
          </tbody>
        </table>

      </td>
    </tr>
  </table>

</div>